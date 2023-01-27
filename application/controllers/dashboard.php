<?php 

class Dashboard extends CI_Controller{
    
    public function dashboard_admin()
    {
        if(empty($this->session->userdata('userName'))) {
            redirect('dashboard');
        }
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/templates/footer');
    }
    public function index()
    {
        $this->load->view('admin/form_login');
    }


}

?>