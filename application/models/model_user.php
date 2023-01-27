<?php
class Model_USER extends CI_Model
{
    public function get_all_data_kategori()
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $this->db->order_by('idKategori', 'namaKategori');
        return $this->db->get()->result();
    }

    public function kategori($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $this->db->where('idKategori', $id);
        return $this->db->get()->row();
    }

    public function get_all_data_kostum($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_kostum');
        $this->db->join('tbl_kategori', 'tbl_kategori.idKategori = tbl_kostum.idKategori', 'left');
        $this->db->where('tbl_kostum.idKategori', $id);
        return $this->db->get()->result();
    }

    public function find($id)
    {
        $result = $this->db->where('idKostum', $id)
                            ->limit(1)
                            ->get('tbl_kostum');
        if ($result->num_rows() > 0) {
            return $result->row();
        }else {
            return array();
        }

    }

    public function cek_login($table, $data)
    {
        $q = $this->db->get_where($table, $data);
        return $q;
    }

    
    public function get_data_by_username($table, $user)
    {
        return $this->db->get_where($table, $user);
    }

    public function user($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('idUser', $id);
        return $this->db->get()->row();
    }

    public function get_all_data_sewaku($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_sewa');
        $this->db->join('tbl_user', 'tbl_user.idUser = tbl_sewa.idUser', 'left');
        $this->db->where('tbl_sewa.idUser', $id);
        return $this->db->get()->result();
    }

    public function user_sewa()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->order_by('idUser');
        // $this->db->limit(1);
        return $this->db->get()->result();
    }


}
?>