<?php
    class Koleksi extends CI_Controller 
    {
        public function index()
        {
            $data['kostum']=$this->model_crud->tampilKostum();
            // $data['kategori']=$this->model_crud->get_all_data('tbl_kategori')->result();
            $this->load->view('user/templates/navbar');
            $this->load->view('user/koleksi', $data);
            $this->load->view('user/templates/footer');
        }
        
        public function kategori($id)
        {
            $data['kategori'] = $this->model_user->kategori($id);
            $data['kostum'] = $this->model_user->get_all_data_kostum($id);
            $this->load->view('user/templates/navbar');
            $this->load->view('user/koleksi_kategori', $data);
            
            $this->load->view('user/templates/footer');
        }

        public function tambah_ke_keranjang($id)
        {
            $status = $this->session->userdata('status');
            if (empty($status)) {
                redirect('user/home');
            } 

            $kostum = $this->model_crud->find($id);

            $data = array(
                'id'      => $kostum->idKostum,
                'qty'     => 1,
                'price'   => $kostum->harga,
                'name'    => $kostum->namaKostum,
                'image'   => $kostum->gambar,
            );
            $status = $this->cart->insert($data);
            if($status)
            {
                $this->session->set_flashdata('flash_tambah','Produk berhasil ditambahkan');
                $this->session->set_flashdata('error','Produk gagal ditambahkan');
            }
            $data['image'] = $result->gambar;
            redirect('user/koleksi', $data);
        }

        public function detail_keranjang()
        {
            $status = $this->session->userdata('status');
            if (empty($status)) {
                redirect('user/home');
            } 
            
            $this->load->view('user/templates/navbar');
            $this->load->view('user/keranjang');
            $this->load->view('user/templates/footer');
        }

        function update_keranjang(){
            $update = 0;
            
            // 
            $rowid = $this->input->get('rowid');
            $qty = $this->input->get('qty');
            
            // 
            if(!empty($rowid) && !empty($qty)){
                $data = array(
                    'rowid' => $rowid,
                    'qty'   => $qty
                );
                $update = $this->cart->update($data);
            }
            
            // 
            echo $update?'ok':'err';
        }

        public function hapus_keranjang($rowid) 
        {
            // Hapus produk dari keranjang
            $remove = $this->cart->remove($rowid);
            
            redirect('user/koleksi/detail_keranjang');
        }

        public function detail_kostum($id)
        {
            $status = $this->session->userdata('status');
            if (empty($status)) {
                redirect('user/home');
            } 

            $id = ['idKostum' => $id];
            $data['kategori'] = $this->model_crud->get_all_data_kostum('tbl_kategori')->result();
            $data['kostum'] = $this->model_crud->join_table ('tbl_kostum ko','tbl_kategori ka', 'ko.idKategori=ka.idKategori', $id)->result();
            $this->load->view('user/templates/navbar');
            $this->load->view('user/detail_kostum', $data);
            $this->load->view('user/templates/footer');
        }
        
    }
?>