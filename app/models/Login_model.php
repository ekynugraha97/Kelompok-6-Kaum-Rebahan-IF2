<?php
    class Login_model{

        private $table = 'tb_user';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function checkLogin($username, $pass){

            $this->db->query('SELECT * FROM tb_user WHERE username =:username AND password=:pass');
            $this->db->bind('username', $username);
            $this->db->bind('pass', $pass);
            $hasil = $this->db->single();

            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $hasil['idUser'];
            
        }

        public function simpanAkun($nama,$username,$pass)
        {
            $this->db->query('SELECT (max(idUser)+1) as maks_id FROM ' . $this->table);
            $data=$this->db->resultSet();
            foreach ($data as $rec){
            $id=$rec["maks_id"];}
            

            $this->db->query('INSERT INTO '.$this->table.'(username,password,nama) VALUES (:username,:password,:nama)');
            // $this->db->bind('idUser', $id);
            $this->db->bind('username', $username);
            $this->db->bind('password', $pass);
            $this->db->bind('nama',$nama);
            $this->db->execute();
            
            
            

            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
        }
    }

?>