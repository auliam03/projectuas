<?php
defined('BASEPATH') OR exit('No Direct Script Acces Allowed');
class Main_model extends CI_Model{
    public function getAllOutlet(){
        return $this->db->get('outlet')->result_array();
    }
}