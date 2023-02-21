<?php
    class Transaksi_model{
        private $table = 'tb_transaksi';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function tambahTransaksi($idpelanggan,$idgerabah,$nama_gerabah,$jml_item,$harga,$harga_total,$tanggal_pesan,$alamat,$pembayaran,$status){

            $this->db->query('SELECT (max(id_transaksi)+1) as maks_id FROM ' . $this->table);
            $data=$this->db->resultSet();
            foreach ($data as $rec){
            $id=$rec["maks_id"];}
            
            $this->db->query('INSERT INTO ' . $this->table . '(id_transaksi,id_pelanggan, idgerabah,nama_gerabah,jml_item,harga,total_harga,tanggal_pesan,alamat,pembayaran,status) 
            VALUES(:id_transaksi,:id_pelanggan, :idgerabah, :nama_gerabah,:jml_item,:harga,:harga_total,:tanggal_pesan,:alamat,:pembayaran,:status)');
            $this->db->bind('id_transaksi',$id);
            $this->db->bind('id_pelanggan',$idpelanggan);
            $this->db->bind('idgerabah',$idgerabah);
            $this->db->bind('nama_gerabah',$nama_gerabah);
            $this->db->bind('jml_item',$jml_item);
            $this->db->bind('harga',$harga);
            $this->db->bind('harga_total',$harga_total);
            $this->db->bind('tanggal_pesan',$tanggal_pesan);
            $this->db->bind('alamat',$alamat);
            $this->db->bind('pembayaran',$pembayaran);
            $this->db->bind('status',$status);
            $this->db->execute();

            return $id;
        }

        public function getDataById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_transaksi=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }
    }