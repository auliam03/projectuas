<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class belajar extends CI_Controller
{ 
    public function biodata(){
         $nim= '19220381';
         $nama= 'aulia maulida fitri';
         $kelas= '19.3a.04';
         $prodi="sistem informasi";

         echo "biodata";
         echo "nim=, $nim <br>";
         echo "nama=, $nama <br>";
         echo "kelas=, $kelas <br>";
         echo "prodi=, $prodi <br>";
    }
    public function load(){
        $data=array(
            'no_barang'=>"2233445",
            'nama_barang'=>"penghapus",
            'qty'=>"90",
        );
        $this->load->view('view_belajar', $data);
    }
}
