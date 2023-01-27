<?php 

class Member extends CI_Controller{

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
        $config['base_url']     = site_url('member/index');
        $config['total_rows']   = $this->db->count_all('tbl_user');
        $config['per_page']     = 2;
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

        $data['user']=$this->model_crud->get_all_data('tbl_user', $config["per_page"], $data['page'])->result();
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/user/index', $data);
        $this->load->view('admin/templates/footer');
    }
    public function add()
    {
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/user/add_user');
        $this->load->view('admin/templates/footer');
    }
}
?>