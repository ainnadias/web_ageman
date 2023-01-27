<?php
    class Model_login extends CI_Model 
    {
        public function cek_login($table, $data)
        {
            $q = $this->db->get_where($table, $data);
            return $q;
        }
    }
?>