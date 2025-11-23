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

    $viewData['portfolio'] = $this->Portfolio_model->get_all();

    $data['content'] = $this->load->view('portfolio/index', $viewData, true);
    $this->load->view('layouts/main', $data);
}



    public function create()
{
    $data['page_title'] = 'Add Project';
    $data['active'] = 'portfolio';

    $viewData['services'] = $this->Service_model->get_all();

    $data['content'] = $this->load->view('portfolio/create', $viewData, true);
    $this->load->view('layouts/main', $data);
}



    public function store() {

    // Ambil service_id dan convert '' menjadi NULL
    $service_id = $this->input->post('service_id');
    $service_id = ($service_id === "" ? null : $service_id);

    $data = [
        'client'      => $this->input->post('client'),
        'year'        => $this->input->post('year'),
        'discipline'  => $this->input->post('discipline'),
        'city'        => $this->input->post('city'),
        'country'     => $this->input->post('country'),
        'service_id'  => $service_id,
        'title'       => $this->input->post('title'),
        'description' => $this->input->post('description'),
    ];

    $portfolio_id = $this->Portfolio_model->insert($data);

    // Upload multi image (tidak diubah)
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
                    ($i == 0 ? 1 : 0)
                );
            }
        }
    }

    redirect('portfolio');
}


public function edit($id) {
    $this->load->model('Service_model');

    $portfolio = $this->Portfolio_model->get_by_id($id);

    $data['active'] = 'portfolio_projects';
    $data['active_menu'] = 'portfolio';
    $data['active_submenu'] = 'projects';
    $data['page_title'] = 'Edit Portfolio';

    $data['content'] = $this->load->view('portfolio/edit', [
        'portfolio' => $portfolio,
        'services' => $this->Service_model->get_all()
    ], true);

    $this->load->view('layouts/main', $data);
}

public function update($id) {

    $service_id = $this->input->post('service_id');
    $service_id = ($service_id === "" ? null : $service_id);

    $data = [
        'client'      => $this->input->post('client'),
        'year'        => $this->input->post('year'),
        'discipline'  => $this->input->post('discipline'),
        'city'        => $this->input->post('city'),
        'country'     => $this->input->post('country'),
        'service_id'  => $service_id,
        'title'       => $this->input->post('title'),
        'description' => $this->input->post('description'),
    ];

    $this->Portfolio_model->update($id, $data);

    redirect('portfolio');
}



    public function delete($id) {
        $this->Portfolio_model->delete($id);
        redirect('portfolio');
    }

    public function services()
{
    $data['page_title'] = 'Deliverables';
    $data['active'] = 'portfolio';

    $viewData['services'] = $this->Service_model->get_all();

    $data['content'] = $this->load->view('portfolio/services', $viewData, true);
    $this->load->view('layouts/main', $data);
}



public function store_service() {
    $this->load->model('Service_model');

    $data['active_menu'] = 'portfolio';
    $data['active_submenu'] = 'deliverables';

    $name = $this->input->post('name');
    $this->Service_model->insert($name);

    redirect('portfolio/services');
}

public function delete_service($id) {
    $this->load->model('Service_model');

    $data['active_menu'] = 'portfolio';
    $data['active_submenu'] = 'deliverables';

    $this->Service_model->delete($id);
    redirect('portfolio/services');
}

}