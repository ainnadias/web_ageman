<?php 

class Kategori extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('model_crud');
    }

    public function index()
    {
        if(empty($this->session->userdata('userName'))) {
            redirect('dashboard');
        }

        // Function pagination
        $config['base_url']     = site_url('kategori/index');
        $config['total_rows']   = $this->db->count_all('tbl_kategori');
        $config['per_page']     = 4;
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

        $data['kategori']=$this->model_crud->get_all_data('tbl_kategori', $config["per_page"], $data['page'])->result();
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/kategori/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function add()
    {
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/kategori/form_add');
        $this->load->view('admin/templates/footer');
    }

    public function save() {
        $namaKategori = $this->input->post('namaKategori');
        $dataInsert = array('namaKategori' => $namaKategori);
        $this ->model_crud->insert('tbl_kategori', $dataInsert);
        redirect('kategori');
    }

    public function editKategori($id){
        $dataWhere = array('idKategori'=>$id);
        $data['kategori'] = $this->model_crud->get_data_by_id('tbl_kategori', $dataWhere)->row_object();
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/kategori/form_edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit(){
        $id = $this->input->post('id');
        $namaKategori = $this->input->post('namaKategori');
        $dataUpdate = array('namaKategori'=>$namaKategori);
        $this->model_crud->update('tbl_kategori', $dataUpdate, 'idKategori', $id);
        if ($this->db->affected_rows()) {
            redirect('kategori');
        } else {
            echo "data gagal di update";
            redirect('kategori');
        }
    }

    public function delete($id){
        $this->model_crud->hapus('tbl_kategori', 'idKategori', $id);
        if ($this->db->affected_rows()) {
            redirect('kategori');
        } else {
            echo "data gagal hapus";
        }
    }
}

?> 