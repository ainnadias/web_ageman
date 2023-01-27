<?php 

class Order extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('model_crud');
        
    }

    public function index($jumlah_hari, $tgl_mulai_sewa, $tgl_kembali_sewa)
    {
        $user = $this->session->userdata('id');

        $cart_content = $this->cart->contents();

        $jumlah_hari;

        $total_sewa = $this->cart->total()*$jumlah_hari;

        if(!empty($user)){
            $data_pembeli = [
                'idUser' => $this->session->userdata('id'),
                'tanggalSewa' => date('Y-m-d'),
                'tgl_mulai_sewa'=>$tgl_mulai_sewa,
                'tgl_kembali_sewa'=>$tgl_kembali_sewa,
                'status' => 'N',
                'total_sewa' => $total_sewa
            ];
            $insert_id = $this->model_crud->insert('tbl_sewa', $data_pembeli);

            $idSewa = "SELECT idSewa FROM tbl_sewa ORDER BY idSewa DESC LIMIT 1";
            $query = $this->db->query($idSewa)->row_object();
            
                foreach($cart_content as $item)
                {
                    $detailSewaData = array(
                        'idSewa' => $query->idSewa,
                        'idKostum' =>$item['id'],
                        'qty' => $item['qty'],
                        'harga_detail' => $item["subtotal"],
                    );
                    $this->model_crud->insert('tbl_detail_sewa', $detailSewaData);
                    
                }
            if($query->idSewa)
                {                    
                    $this->cart->destroy();
                    $this->session->set_flashdata('success', 'Produk Berhasil disewa. Silahkan datang ke lokasi untuk mengambil kostum dan melakukan pembayaran !!!');
                    $this->load->view('user/templates/navbar');
                    $this->load->view('user/order');
                    $this->load->view('user/templates/footer');
                } else {
                    $this->session->set_flashdata('error', 'Produk Gagal disewa !!!');
                    $this->load->view('user/templates/navbar');
                    $this->load->view('user/order');
                    $this->load->view('user/templates/footer');
                }
        };
    }

    // public function sewaku($id)
    // {
    //     // $user = $this->session->userdata('id');
    //     // if(!empty($user))
    //     // {
    //     //     $data['kostum'] = $this->model_user->get_all_data_sewaku($id);
    //     //     $this->load->view('user/templates/navbar');
    //     //     $this->load->view('user/sewaku', $data);
    //     //     var_dump($data);die;
    //     //     $this->load->view('user/templates/footer');
    //     // }
    //     // $data['user'] = $this->session->userdata('id');

    //     $data['user'] = $this->model_user->user_sewa($id);
    //     $data['kostum'] = $this->model_user->get_all_data_sewaku($id);
    //     $this->load->view('user/templates/navbar');
    //     $this->load->view('user/sewaku', $data);
    //     // var_dump($data);die;
    //     $this->load->view('user/templates/footer');
    // }

}