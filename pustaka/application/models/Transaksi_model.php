<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');
class Transaksi_model extends CI_Model{
    public function __construct(){
        parent::__construct();
            $this->load->model('Main_model', 'mm');
        }
        public function getTransaksiById($id){
            $this->db->select('*');
            $this->db->join('user', 'detail_transaksi.id_user=transaksi.user.id_user');
            $this->db->join('outlet', 'transaksi.id_outlet =outlet.id_outlet');
            $this->db->join('member', 'transaksi.id_member = member.id_member');
            return $this->db->get_where('transaksi', ['transaksi.id_transaksi' => $id]) ->row_array();
        }
        public function getDetailTransaksiById($id){
            $this->db->select('*');
            $this->db->join('transaksi', 'detail_transaksi.transaksi=transaksi.id_transaksi');
            $this->db->join('outlet', 'transaksi.id_outlet =outlet.id_outlet');
            $this->db->join('jenis_paket', 'jenis_paket.id_jenis_paket =paket.id_jenis_paket');
            $this->db->join('member', 'transaksi.id_member = member.id_member');
            $this->db->join('user', 'transaksi.id_user =user.id_user');
            return $this->db->get_where('detail_transaksi', ['detail_transaksi.id_transaksi' => $id]) ->row_array();
        }
        public function getTotalHarga($id_transaksi){
            $sql ="SELECT *, (SELECT sum(paket.harga_paket * detail_transaksi.kuantitas) FROM detail_transaksi INNER JOIN paket ON detail_transaksi.id_transaksi = transaksi.id_transaksi WHERE detail_transaksi as total_harga FROM detail_transaksi INNER JOIN paket ON detail_transaksi = paket.id_paket INNER JOIN transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi WHERE detail_transaksi.id_transaksi = $id_transaksi";
            return $this->db->query($sql)->row_array();
        }
        public function getpembayaran($id_transaksi){
            $this->db->select('*');
            $this->db->join('transaksi', 'pembayaran.id_transaksi=transaksi.id_transaksi');
            $this->db->join('user', 'pembayaran.id_user = user.id_user');
            return $this->db->get_where('pembayaran',['pembayaran.id_transaksi'=> $id_transaksi])->row_array();

        }
    
    }
