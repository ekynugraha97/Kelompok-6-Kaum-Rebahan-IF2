<?php
    class Home_model{
        private $table = 'tb_gerabah';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getAllData(){
            $this->db->query('SELECT * FROM '.$this->table);
            return $this->db->resultSet();
        }

        public function getDataById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idgerabah=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function getDataByJenis($idjenis){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_jenis=:idjenis');
            $this->db->bind('idjenis', $idjenis);
            return $this->db->resultSet();
        }

        public function uploadFoto(){
            $namaFile = $_FILES['foto_mobil']['name'];
            $namaSementara = $_FILES['foto_mobil']['tmp_name'];
            // tentukan lokasi file akan dipindahkan
            $dirUpload = "img/";
            // pindahkan file
            $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
            if ($terupload) {
                return true;
            } else {
                return false;
            }
        }

        public function updateStok($idgerabah,$stokAkhir){
            $sql="UPDATE ".$this->table." SET stok='$stokAkhir' WHERE idgerabah='$idgerabah'";
            $this->db->query($sql);
            $this->db->execute();
        }

        
    }