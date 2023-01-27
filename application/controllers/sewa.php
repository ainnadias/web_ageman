<?php 
    class Sewa extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('model_crud');
            $this->load->helper('tanggal');
        }

        public function index($offset = NULL)
        {
            if(empty($this->session->userdata('userName'))) {
                redirect('dashboard');
            }
            $limit = 10;
            if(!is_null($offset))
            {
                $offset = $this->uri->segment(3);
            }
            // Function pagination
            $config['base_url']     = site_url('sewa/index');
            $config['total_rows']   = $this->db->count_all('tbl_sewa');
            $config['per_page']     = $limit;
            $config['uri_segment']  = 3;
            $choice                 = $config["total_rows"] / $config["per_page"];
            $config["num_links"]    = floor($choice);

            $config['first_link']   = 'First';
            $config['last_link']   = 'Last';
            $config['next_link']   = 'Next';
            $config['prev_link']   = 'Prev';
            $config['full_tag_open']   = '<div class="text-center"><nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">';
            $config['full_tag_colse']  = '</ul><nav/></div>';
            $config['num_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']   = '</span></li>';
            $config['cur_tag_open']    = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']   = '</span></li>';
            $config['next_tag_open']    = '<li class="page-item "><span class="page-link">';
            $config['next_tagl_close']   = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']   = '</span>Next</li>';
            $config['first_tag_open']    = '<li class="page-item active"><span class="page-link">';
            $config['first_tagl_close']   = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']   = '</span>Next</li>';


            $this->pagination->initialize($config);
                $data['page']   = ($this->uri->segment(3) ? $this->uri->segment(3) : 0);

                $data['sewa']=$this->model_crud->readSewa($limit, $offset);
                $data['detailSewa'] = $this->model_crud->get_all_data_kostum('tbl_detail_sewa')->row_object();
                $data['pagination'] = $this->pagination->create_links();

                $this->load->view('admin/templates/sidebar');
                $this->load->view('admin/templates/navbar');
                $this->load->view('admin/sewa/index', $data);
                $this->load->view('admin/templates/footer');
        }

        public function activated($id){
            // var_dump($id);die;
            $dataUpdated = array(
                'status' => 'Y'
            );
            $this->db->set($dataUpdated);
            $this->db->where('idSewa', $id);
            $this->db->update('tbl_sewa');
            $this->session->set_flashdata('flash', 'Pembayaran telah diterima');
            redirect('sewa');
        }
    
    //     public function deactivated($id){
    //         // var_dump($id);die;
    //         $dataUpdated = array(
    //             'status' => 'N'
    //         );
    //         $this->db->set($dataUpdated);
    //         $this->db->where('idSewa', $id);
    //         $this->db->update('tbl_sewa');
    //         $this->session->set_flashdata('flash', 'Member berhasil dinonaktifkan');
    //         redirect('sewa');
    //     }

        public function detailSewa($id)
        {
            $id = ['idDetailSewa'=> $id];
            $data['kostum'] = $this->model_crud->get_all_data_kostum('tbl_kostum')->result();
            $data['sewa'] = $this->model_crud->get_all_data_kostum('tbl_sewa')->result();
            $data['detailSewa']=$this->model_crud->readDetailSewa('tbl_detail_sewa ds', 'tbl_sewa s', 'ds.idSewa = s.idSewa', 'tbl_kostum ko', 'ds.idKostum = ko.idKostum' )->row_object();
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/sewa/detail_sewa', $data);
            $this->load->view('admin/templates/footer');
        }
    }