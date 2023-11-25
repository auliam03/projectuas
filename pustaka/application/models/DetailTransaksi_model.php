<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');
class DetailTransaksi_model extends CI_Model{
    public function __construct(){
        parent::__construct();
            $this->load->model('Main_model', 'mm');
        }
        public function getDetailTransaksiById($id){
            $this->db->select('*');
            $this->db->join('paket', 'detail_transaksi.id_paket=paket.id_paket');
            $this->db->join('transaksi', 'transaksi.id_transaksi =detail_transaksi.id_transaksi');
            return $this->db->get_where('detail_transaksi', ['detail_transaksi.id_transaksi' => $id]) ->row_array();
        }
        public function getDetailTransaksiByIdTransaksi($id_transaksi){
            $this->db->select('*');
            $this->db->join('transaksi', 'detail_transaksi.id_transaksi=transaksi.id_transaksi');
            $this->db->join('outlet', 'transaksi.id_outlet =outlet.id_outlet');
            $this->db->join('member', 'transaksi.id_member =member.id_member');
            $this->db->join('paket', 'detail_transaksi.id_paket =paket.id_paket');
            $this->db->join('user', 'transaksi.id_user =user.id_user');
            $this->db->order_by('detail_transaksi.id_transaksi', $id_transaksi, 'desc');
            $this->db->where('detail_transaksi.id_transaksi', $id_transaksi);
            return $this->db->get('detail_transaksi')->row_array();
        }
    }