<?php
defined ('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Model {
    public function getDosen() {
        $data = $this->db->query("select * from tb_matkul join tb_dosen on tb_matkul.id_dosen=tb_dosen.id_dosen");

        return $data->result_array();
    }
}