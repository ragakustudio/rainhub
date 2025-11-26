<?php
class Portfolio extends CI_Controller {

    public function __construct() {
    parent::__construct();
    is_logged_in();
    
    $this->load->model('Portfolio_model');
    $this->load->model('Service_model');
}


    public function index()
{
    $data['page_title'] = 'Projects';
    $data['active'] = 'portfolio';

    // Ambil semua data portfolio
    $portfolio = $this->Portfolio_model->get_all();
    
    // Kirim ke view
    $viewData['portfolio'] = $portfolio;

    // Hitung total project
    $viewData['total_project'] = count($portfolio);

    // Load View
    $data['content'] = $this->load->view('portfolio/index', $viewData, true);
    $this->load->view('layouts/main', $data);
}

    public function create()
{
    $this->load->model('Service_model');

    $data['active'] = 'portfolio';
    $data['page_title'] = 'Add Project';

    // --- FIX: pastikan semua variabel dikirim ---
    $viewData = [
        'portfolio'             => null,
        'services_list'         => $this->Service_model->get_all(),
        'deliverables_list'     => [],              // FIXED
        'selected_services'     => [],
        'selected_deliverables' => [],
        'images'                => [],              // FIXED
        'action'                => base_url('portfolio/store')
    ];

    $data['content'] = $this->load->view('portfolio/create', $viewData, true);
    $this->load->view('layouts/main', $data);
}



    public function store()
{
    // Ambil semua data project
    $data = [
        'client'      => $this->input->post('client'),
        'year'        => $this->input->post('year'),
        'discipline'  => $this->input->post('discipline'),
        'city'        => $this->input->post('city'),
        'country'     => $this->input->post('country'),
        'title'       => $this->input->post('title'),
        'description' => $this->input->post('description'),
    ];

    // Insert ke table portfolio
    $portfolio_id = $this->Portfolio_model->insert($data);
    $services = $this->input->post('services');

if (!empty($services)) {
    foreach ($services as $sid) {
        $this->db->insert('portfolio_services', [
            'portfolio_id' => $portfolio_id,
            'service_id'   => $sid
        ]);
    }
}
    // ================================
    //  ASSIGN MULTIPLE SERVICES
    // ================================
    $services = $this->input->post('services');

if (!empty($services)) {
    foreach ($services as $sid) {
        $this->db->insert('portfolio_services', [
            'portfolio_id' => $portfolio_id,
            'service_id'   => $sid
        ]);
    }
}

    // ================================
    //  UPLOAD MULTI IMAGES
    // ================================
    if (!empty($_FILES['images']['name'][0])) {

        if (!is_dir('./assets/img/portfolio/')) {
            mkdir('./assets/img/portfolio/', 0755, true);
        }

        $files = $_FILES;
        $count = count($_FILES['images']['name']);

        for ($i = 0; $i < $count; $i++) {

            $_FILES['file']['name']     = $files['images']['name'][$i];
            $_FILES['file']['type']     = $files['images']['type'][$i];
            $_FILES['file']['tmp_name'] = $files['images']['tmp_name'][$i];
            $_FILES['file']['error']    = $files['images']['error'][$i];
            $_FILES['file']['size']     = $files['images']['size'][$i];

            $config['upload_path']   = './assets/img/portfolio/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = 4096;
            $config['file_name']     = time() . '_' . uniqid();

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $uploadData = $this->upload->data();
                $this->Portfolio_model->add_image(
                    $portfolio_id,
                    $uploadData['file_name'],
                    ($i == 0 ? 1 : 0) // image pertama jadi cover
                );
            }
        }
    }

    redirect('portfolio');
}



public function edit($id)
{
    $portfolio = $this->Portfolio_model->get_by_id($id);
    if (!$portfolio) show_404();

    // ambil list services
    $services_list = $this->Service_model->get_all();

    $images = $this->Portfolio_model->get_images($id);

    // ambil services terpilih
    $selected_services = $this->Portfolio_model->get_services_by_portfolio($id);
    $selected_ids = array_column($selected_services, 'service_id');

    // SEND DATA
    $viewData = [
    'portfolio'             => $portfolio,
    'services_list'         => $this->Service_model->get_all(),
    'deliverables_list'     => [],
    'selected_services'     => $selected_services,
    'selected_deliverables' => [],
    'images'                => $images,   // FIXED
    'action'                => base_url('portfolio/update/'.$id)
];


    $data['active'] = 'portfolio';
    $data['page_title'] = 'Edit Project';
    $data['content'] = $this->load->view('portfolio/edit', $viewData, true);

    $this->load->view('layouts/main', $data);
}



public function update($id)
{
    $portfolio = $this->Portfolio_model->get_by_id($id);
    if (!$portfolio) show_404();

    $service_id = $this->input->post('service_id');
    $service_id = ($service_id === "" ? null : $service_id);

    /* ------------------------------
       UPDATE DATA TEXT
    ------------------------------ */
    $data = [
    'client'      => $this->input->post('client'),
    'year'        => $this->input->post('year'),
    'discipline'  => $this->input->post('discipline'),
    'city'        => $this->input->post('city'),
    'country'     => $this->input->post('country'),
    'title'       => $this->input->post('title'),
    'description' => $this->input->post('description'),
];


    /* ------------------------------
       FEATURE IMAGE UPLOAD
    ------------------------------ */
    if (!empty($_FILES['thumbnail']['name'])) {

        $config = [
            'upload_path'   => './assets/img/portfolio/',
            'allowed_types' => 'jpg|jpeg|png',
            'max_size'      => 4096,
            'file_name'     => time() . '_' . uniqid()
        ];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('thumbnail')) {

            $upload = $this->upload->data();
            $data['thumbnail'] = $upload['file_name'];

            // hapus cover lama
            if (!empty($portfolio->thumbnail)) {
                @unlink('./assets/img/portfolio/' . $portfolio->thumbnail);
            }
        }
    }

    /* ------------------------------
       UPDATE DATABASE
    ------------------------------ */
    $this->Portfolio_model->update($id, $data);

    /* ------------------------------
       ADDITIONAL GALLERY IMAGES
    ------------------------------ */
    if (!empty($_FILES['images']['name'][0])) {

        $count = count($_FILES['images']['name']);

        for ($i = 0; $i < $count; $i++) {

            $_FILES['file']['name']     = $_FILES['images']['name'][$i];
            $_FILES['file']['type']     = $_FILES['images']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
            $_FILES['file']['error']    = $_FILES['images']['error'][$i];
            $_FILES['file']['size']     = $_FILES['images']['size'][$i];

            $config['file_name'] = time() . '_' . uniqid();
            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {
                $uploadData = $this->upload->data();

                $this->Portfolio_model->add_image($id, $uploadData['file_name'], 0);
            }
        }
    }

    $this->db->delete('portfolio_services', ['portfolio_id' => $id]);

    $services = $this->input->post('services');
    if (!empty($services)) {
        foreach ($services as $sid) {
            $this->db->insert('portfolio_services', [
                'portfolio_id' => $id,
                'service_id'   => $sid
            ]);
        }

    // DELETE OLD SERVICES
    $this->db->delete('portfolio_services', ['portfolio_id' => $id]);

    // INSERT NEW SERVICES
    $services = $this->input->post('services');

    if (!empty($services)) {
        foreach ($services as $sid) {
            $this->db->insert('portfolio_services', [
                'portfolio_id' => $id,
                'service_id'   => $sid
            ]);
        }
    }
}



    redirect('portfolio/detail/' . $id);
}

    public function delete($id) {
        $this->Portfolio_model->delete($id);
        redirect('portfolio');
    }

    public function delete_image($image_id, $portfolio_id)
{
    $img = $this->db->where('id', $image_id)->get('portfolio_images')->row();

    if ($img) {
        @unlink('./assets/img/portfolio/' . $img->filename);
        $this->db->delete('portfolio_images', ['id' => $image_id]);
    }

    redirect('portfolio/edit/' . $portfolio_id);
}


    public function service()
{
    $this->load->model('Service_model');

    $services = $this->Service_model->get_all();

    foreach ($services as &$s) {
        $s->count = $this->Service_model->count_usage($s->id);
    }

    $viewData['services'] = $services;

    // ACTIVATE MENU
    $data['active'] = 'deliverables';
    $data['page_title'] = 'Deliverables';

    // LOAD VIEW
    $data['content'] = $this->load->view(
        'portfolio/service',
        $viewData,
        true
    );

    // LOAD LAYOUT
    $this->load->view('layouts/main', $data);
}

public function count_usage($service_id)
{
    return $this->db
        ->where('service_id', $service_id)
        ->count_all_results('portfolio_services');
}



public function detail($id)
{
    // Ambil portfolio dulu!
    $portfolio = $this->Portfolio_model->get_by_id($id);

    if (!$portfolio) {
        show_404();
    }

    // Ambil services dari pivot
    $services = $this->Portfolio_model->get_services_by_portfolio($id);

    $data['active'] = 'portfolio';
    $data['page_title'] = 'Project Detail';

    $viewData = [
        'portfolio' => $portfolio,
        'images'    => $this->Portfolio_model->get_images($id),
        'services'  => $services
    ];

    $data['content'] = $this->load->view('portfolio/detail', $viewData, true);
    $this->load->view('layouts/main', $data);
}



public function store_service() 
{
    $name = $this->input->post('name');

    if ($name) {
        $this->Service_model->insert(['name' => $name]);
    }

    redirect('portfolio/service');
}

public function update_service($id)
{
    $name = $this->input->post('name');

    if ($name) {
        $this->Service_model->update($id, ['name' => $name]);
    }

    redirect('portfolio/service');
}


public function delete_service($id)
{
    $this->Service_model->delete($id);
    redirect('portfolio/service');
}

}