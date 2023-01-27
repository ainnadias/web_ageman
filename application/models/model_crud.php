<?php
class Model_CRUD extends CI_Model
{

    public function get_all_data($table, $limit, $start){
        $q=$this->db->get($table, $limit, $start);
        return $q;
    }
    public function get_all_data_kostum($table){
        $q=$this->db->get($table);
        return $q;
    }

    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function get_data_by_id($table, $id)
    {
        return $this->db->get_where($table, $id);
    }

    public function update($table, $data, $pk, $id){
        $this->db->where($pk, $id);
        $this->db->update($table, $data);
    }
     
    public function hapus($table, $pk, $id){
        $this->db->where($pk, $id);
        $this->db->delete($table);
    }

    public function tampilKostum()
    {
        $sql = "SELECT ko.idKostum, ka.namaKategori as Kategori, ko.namaKostum, ko.harga, ko.deskripsi, ko.stok, ko.gambar FROM tbl_kostum ko INNER JOIN tbl_kategori ka ON ko.idKategori = ka.idKategori";

        $query = $this->db->query($sql);
        
        if($query){
            $result = $query->result();
            return $result;
            // return $this->db->limit($limit, $start);
        }else{
            return row_array();
        }
    }

    public function readKostum($limit, $offset)
    {
        $this->db->select('tbl_kostum.*, tbl_kategori.namaKategori as Kategori');
        $this->db->from('tbl_kostum');
        $this->db->join('tbl_kategori', 'tbl_kategori.idKategori = tbl_kostum.idKategori');
        $this->db->limit($limit, $offset);
        $q = $this->db->get();
        return $q->result();
    }

    public function readSewa($limit, $offset)
    {
        $this->db->select('tbl_sewa.*, tbl_user.namaUser as namaUser');
        $this->db->from('tbl_sewa');
        $this->db->join('tbl_user', 'tbl_user.idUser = tbl_sewa.idUser');
        $this->db->limit($limit, $offset);
        $q = $this->db->get();
        return $q->result();
    }

    public function readDetailSewa($table, $tbljoin, $q, $tbljoin2, $q2)
    {
        $this->db->select('*', 'idSewa', 'gambar', 'ko.namaKostum AS nama', 'ko.harga AS harga_kostum', 'qty', 'harga');
        $this->db->join($tbljoin,$q)->join($tbljoin2, $q2);
        return $this->db->get($table);
    }

    public function join_table ($table, $tbljoin, $q, $id) 
    {
            $this->db->select('*,namaKategori as Kategori');
            $this->db->join($tbljoin,$q);
            return $this->db->get_where($table, $id);
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
}
?>