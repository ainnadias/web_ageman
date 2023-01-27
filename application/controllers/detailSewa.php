<?php 
    class detailSewa extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('model_crud');
        }

        public function index()
        {
            // $id = ['idDetailSewa'=> $id];
            // $data['kostum'] = $this->model_crud->get_all_data_kostum('tbl_kostum')->result();
            // $data['sewa'] = $this->model_crud->get_all_data_kostum('tbl_sewa')->result();
            // $data['detail_sewa'] = $this->model_crud->get_all_data_kostum('tbl_detail_sewa')->result();
            $data['detail_sewa']=$this->model_crud->readDetailSewa('tbl_detail_sewa ds', 'tbl_sewa s', 'ds.idSewa = s.idSewa', 'tbl_kostum ko', 'ds.idKostum = ko.idKostum' )->result();
            // var_dump($data); die;
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/sewa/detail_sewa', $data);
            $this->load->view('admin/templates/footer');
        }
        // public function detail($id)
        // {
        //     $id = ['idSewa'=> $id];
        //     // $data['kostum'] = $this->model_crud->get_all_data_kostum('tbl_kostum')->result();
        //     $data['sewa'] = $this->model_crud->get_all_data_kostum('tbl_sewa')->result();
        //     // $data['detail_sewa'] = $this->model_crud->get_all_data_kostum('tbl_detail_sewa')->result();
        //     $data['detail_sewa']=$this->model_crud->readDetailSewa('tbl_detail_sewa ds', 'tbl_sewa s', 'ds.idSewa = s.idSewa', 'tbl_kostum ko', 'ds.idKostum = ko.idKostum', $id)->result();
        //     // var_dump($data); die;
        //     $this->load->view('admin/templates/sidebar');
        //     $this->load->view('admin/templates/navbar');
        //     $this->load->view('admin/sewa/detail_sewa_id', $data);
        //     $this->load->view('admin/templates/footer');
        // }
    }