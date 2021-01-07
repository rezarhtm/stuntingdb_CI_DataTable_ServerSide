<?php

class DataModel extends CI_Model {
    public function getData() {
        $data = array(
            'nama' => 'Reza',
            'status' => 'Mahasiswa',
            'jurusan' => 'Ekonomi'

        );
        return $data;
    }
}

?>