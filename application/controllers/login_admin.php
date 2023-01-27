 <?php
    class Login_admin extends CI_Controller
    {
        public function aksi_login()
        {
            $this->load->model('model_login');
            $u = $this->input->post('username');
            $p = $this->input->post('password');

            $data =[
                'userName' => $u,
                'password' => $p
            ];

            $cek = $this->model_login->cek_login('tbl_admin', $data)->num_rows();
            if($cek==1){
                $data_session = array(
                    'userName' => $u,
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                redirect('Dashboard/dashboard_admin');
            } else {
                redirect('dashboard');
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('dashboard');
        }
    }
?>