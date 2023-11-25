<?php
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');
class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Auth_model', 'am');
        $this->load->model('Transaksi_model', 'tm');
        $this->load->model('DetailTransaksi_model', 'dtm');
    }
    public function index(){
        $data['outlet'] = $this->mm->getAllOutlet();
        $this->load->view('auth/index', $data);
        $this->load->view('templates/header_landing', $data);
    }
    public function cek_status_laundry(){
        $data['title']= 'Cek Status Laundry - Laundry';
        if (isset($_POST['cari_kode'])){
            $kode_invoice = $this->input->post('kode_invoice', true);
            $data['transaksi']= $this->am->getTransaksiByKodeInvoice($kode_invoice);
            $id_transaksi = $data['transaksi']['id_transaksi'];
            if ($data['transaksi'] > 0){
                $data['detail_header_transaksi'] = $this->am->getDetailTransaksiByIdTransaksi($id_transaksi);
                $data['detail_transaksi'] = $this->tm->getDetailTransaksiById($id_transaksi);
                $data['total_harga'] = $this->tm->getTotalHarga($id_transaksi);
                $data['pembayaran'] = $this->tm->getpembayaran($id_transaksi);
                $data['berhasil'] = true;
            }
            else{
                $data['error'] = true;
            }
            $data['kode_invoice'] =$kode_invoice;
        }
        $this->load->view('templates/header_landing', $data);
        $this->load->view('auth/cek_status_laundry', $data);
    }

}