<?php 
    class Kostum extends CI_Controller
    {
        public function index($offset = NULL)
        {
            if(empty($this->session->userdata('userName'))) {
                redirect('dashboard');
            }

            $limit = 5;
            if(!is_null($offset))
            {
                $offset = $this->uri->segment(3);
            }

            // Function pagination
            $config['base_url']     = site_url('kostum/index');
            $config['total_rows']   = $this->db->count_all('tbl_kostum');
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

            $data['kostum']=$this->model_crud->readKostum($limit, $offset);
            // $data['kostum']=$this->model_crud->readKostum($config["per_page"], $data['page']);
            $data['pagination'] = $this->pagination->create_links();

            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/kostum/index', $data);
            $this->load->view('admin/templates/footer');
        }

        public function add()
        {
            $data['kategori'] = $this->model_crud->get_all_data_kostum('tbl_kategori')->result();
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/kostum/add_kostum', $data);
            $this->load->view('admin/templates/footer');
        }

        public function save()
        {
            $data['gambar'] = '';

            $namaKostum = $this->input->post('namaKostum');
            $idKategori = $this->input->post('idKategori');
            $harga = $this->input->post('harga');
            $deskripsi = $this->input->post('deskripsi');
            $stok = $this->input->post('stok');
            $gambar = $_FILES['gambar']['name'];
            if ($gambar =''){}else{
                $config['upload_path']      = './assets/kostum/';
                $config['allowed_types']    = 'jpg|png|jpeg';
                $this->load->library('upload', $config);
               
                if(!$this->upload->do_upload('gambar')) {
                    echo "Upload gagal"; die();
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }
            $dataInsert = [
                'namaKostum'    => $namaKostum,
                'idKategori'    => $idKategori,
                'harga'         => $harga,
                'deskripsi'     => $deskripsi,
                'stok'          => $stok,
                'gambar'        => $gambar,
            ];
            $this->model_crud->insert('tbl_kostum', $dataInsert);
            redirect('kostum');
        }

        public function edit($id)
        {
            // $id = ['idKostum' => $id];
            $id = ['idKostum'=> $id];
            $data['kategori'] = $this->model_crud->get_all_data_kostum('tbl_kategori')->result();
            $data['kostum'] = $this->model_crud->join_table('tbl_kostum ko', 'tbl_kategori ka', 'ko.idKategori=ka.idKategori', $id)->row_object();
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/kostum/edit_kostum', $data);
            $this->load->view('admin/templates/footer');
        }


        public function update()
        {
            $id = $this->input->post('id');
            $namaKostum = $this->input->post('namaKostum');
            $idKategori = $this->input->post('idKategori');
            $harga = $this->input->post('harga');
            $deskripsi = $this->input->post('deskripsi');
            $stok = $this->input->post('stok');

            
            $foto = $_FILES['gambar']['name'];
            // var_dump($foto);
            if($foto != '')
            {
                $config['upload_path']      = './assets/kostum/';
                $config['allowed_types']    = 'jpg|png|jpeg';
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar'))
                {
                    // var_dump($this->upload->display_errors());
                    redirect('kostum');

                } else{
                    $gambar = $this->upload->data('file_name');

                    $dataUpdate = [
                
                        'namaKostum' => $namaKostum,
                        'idKategori' => $idKategori,
                        'harga' => $harga,
                        'deskripsi' => $deskripsi,
                        'stok' => $stok,
                        'gambar' => $gambar,
                    ];
        
                }
            }
            else {
                $dataUpdate = [
                    'namaKostum' => $namaKostum,
                    'idKategori' => $idKategori,
                    'harga' => $harga,
                    'deskripsi' => $deskripsi,
                    'stok' => $stok,
                ];
    
            }
            
            $this->model_crud->update('tbl_kostum', $dataUpdate, 'idKostum', $id);
            
                    if ($this->db->affected_rows()) {
                        redirect('kostum');
                    } else {
                        echo "data gagal di update";
                        redirect('dashboard/dashboard_admin');
                    }
        }

        public function delete($id) 
        {
            $this->model_crud->hapus('tbl_kostum', 'idKostum', $id);
            if ($this->db->affected_rows()) {
                redirect('kostum');
            } else {
                echo "data gagal hapus";
            }
        }
    }
?>