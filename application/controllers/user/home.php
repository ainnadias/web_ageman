<?php
    class Home extends CI_Controller 
    {
        public function __construct()
        {
        parent::__construct();
        $this->load->library('form_validation');
        }

        public function index()
        {   
            $data['user'] = $this->session->userdata('id');
            $this->load->view('user/templates/navbar');
            $this->load->view('user/homepage', $data);
            $this->load->view('user/templates/footer');
        }


        public function registrasi()
        {
            $namaUser = $this->input->post('namaUser');
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $alamat = $this->input->post('alamat');
            $no_hp = $this->input->post('no_hp');
            $password = $this->input->post('password');

            $data = [
                'namaUser'  => $namaUser,
                'email'  => $email,
                'username'  => $username,
                'alamat'  => $alamat,
                'no_hp'  => $no_hp,
                'password'  => $password,
            ];
            $this->model_crud->insert('tbl_user', $data);
            redirect('user/home');
            // $this->load->view('user/modal/register');
            // $this->form_validation->set_rules('name', 'Name', 'required|trim');
            // $this->form_validation->set_rules('username', 'Username', 'required|trim');
            // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

            // if ($this->form_validation->run() == false) {
            //     $this->load->view('user/templates/navbar');
            //     $this->load->view('user/homepage');
            //     $this->load->view('user/templates/footer');
            // } else {
            //     echo 'data berhasil ditambahkan!';
            // }
        }

        public function login()
        {
            $u = $this->input->post('username');
            $p = $this->input->post('password');

            $data = [
                'username' => $u, 
                'password' => $p
            ];

            $cek = $this->model_login->cek_login('tbl_user', $data)->num_rows();
            $data2 =  $this->model_user->get_data_by_username('tbl_user', ['username' => $u])->row_object();
            if ($cek == 1) {
                $data_session = [
                    'id' => $data2->idUser,
                    'username' => $u,
                    'status' => 'login'
                ];
                $this->session->set_userdata($data_session);
                redirect('user/home');
            } else {
                redirect('user/koleksi');
            }
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('user/home');
        }
    }
?>