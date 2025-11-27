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

        $portfolio = $this->Portfolio_model->get_all();

        $viewData = [
            'portfolio'      => $portfolio ?? [],
            'total_project'  => $portfolio ? count($portfolio) : 0
        ];

        $data['content'] = $this->load->view('portfolio/index', $viewData, true);
        $this->load->view('layouts/main', $data);
    }

    public function create()
    {
        $data['active'] = 'portfolio';
        $data['page_title'] = 'Add Project';

        $viewData = [
            'portfolio'             => null,
            'services_list'         => $this->Service_model->get_all(),
            'deliverables_list'     => [],
            'selected_services'     => [],
            'selected_deliverables' => [],
            'images'                => [],
            'action'                => base_url('portfolio/store')
        ];

        $data['content'] = $this->load->view('portfolio/create', $viewData, true);
        $this->load->view('layouts/main', $data);
    }

    public function store()
    {
        $data = [
            'client'      => $this->input->post('client'),
            'year'        => $this->input->post('year'),
            'discipline'  => $this->input->post('discipline'),
            'city'        => $this->input->post('city'),
            'country'     => $this->input->post('country'),
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
        ];

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

        // Upload images…
        if (!empty($_FILES['images']['name'][0])) {

            if (!is_dir('./assets/img/portfolio/')) {
                mkdir('./assets/img/portfolio/', 0755, true);
            }

            $count = count($_FILES['images']['name']);
            for ($i = 0; $i < $count; $i++) {

                $_FILES['file']['name']     = $_FILES['images']['name'][$i];
                $_FILES['file']['type']     = $_FILES['images']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['images']['error'][$i];
                $_FILES['file']['size']     = $_FILES['images']['size'][$i];

                $config = [
                    'upload_path'   => './assets/img/portfolio/',
                    'allowed_types' => 'jpg|jpeg|png',
                    'max_size'      => 4096,
                    'file_name'     => time() . '_' . uniqid()
                ];

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

    public function edit($id)
    {
        $portfolio = $this->Portfolio_model->get_by_id($id);
        if (!$portfolio) show_404();

        $viewData = [
            'portfolio'             => $portfolio,
            'services_list'         => $this->Service_model->get_all(),
            'deliverables_list'     => [],
            'selected_services'     => $this->Portfolio_model->get_services_by_portfolio($id),
            'selected_deliverables' => [],
            'images'                => $this->Portfolio_model->get_images($id),
            'action'                => base_url('portfolio/update/' . $id)
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

        $data = [
            'client'      => $this->input->post('client'),
            'year'        => $this->input->post('year'),
            'discipline'  => $this->input->post('discipline'),
            'city'        => $this->input->post('city'),
            'country'     => $this->input->post('country'),
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
        ];

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

                @unlink('./assets/img/portfolio/' . $portfolio->thumbnail);
            }
        }

        $this->Portfolio_model->update($id, $data);

        // Update Services
        $this->db->delete('portfolio_services', ['portfolio_id' => $id]);

        $services = $this->input->post('services');
        if (!empty($services)) {
            foreach ($services as $sid) {
                $this->db->insert('portfolio_services', [
                    'portfolio_id' => $id,
                    'service_id'   => $sid
                ]);
            }
        }

        redirect('portfolio/detail/' . $id);
    }

    public function delete($id)
    {
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
        $services = $this->Service_model->get_all();

        foreach ($services as &$s) {
            $s->count = $this->Service_model->count_usage($s->id);
        }

        $viewData['services'] = $services;

        $data['active'] = 'portfolio';
        $data['page_title'] = 'Services Overview';

        $data['content'] = $this->load->view('portfolio/service', $viewData, true);
        $this->load->view('layouts/main', $data);
    }

    public function detail($id)
    {
        $portfolio = $this->Portfolio_model->get_by_id($id);
        if (!$portfolio) show_404();

        $viewData = [
            'portfolio' => $portfolio,
            'images'    => $this->Portfolio_model->get_images($id),
            'services'  => $this->Portfolio_model->get_services_by_portfolio($id)
        ];

        $data['active'] = 'portfolio';
        $data['page_title'] = 'Project Detail';

        $data['content'] = $this->load->view('portfolio/detail', $viewData, true);
        $this->load->view('layouts/main', $data);
    }
}
