<?php

class Auth_Model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($nama_pengguna, $sandi)
    {
        $this->db->query('SELECT * from user WHERE nama_pengguna = :nama_pengguna AND sandi = :sandi');
        $this->db->bind('nama_pengguna', $nama_pengguna);
        $this->db->bind('sandi', $sandi);
        $this->db->execute();
        return $this->db->all();
    }

    public function UpdatePassword($data){
        $query = "UPDATE user SET sandi = :sandi WHERE nama_pengguna = :nama_pengguna;";

        $this->db->query($query);
        $this->db->bind('nama_pengguna', $data['nama_pengguna']);
        $this->db->bind('sandi', $data['sandi']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataUser($data)
    {
        // var_dump($_POST);
        // echo $_POST;
        try {
            $query = "INSERT INTO user (nama_pengguna, email, no_wa, sandi) VALUES (:nama_pengguna, :email, :no_wa, :sandi)";
    
            $this->db->query($query);
            $this->db->bind('nama_pengguna', $data['nama_pengguna']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('no_wa', $data['no_wa']);
            $this->db->bind('sandi', $data['sandi']);
    
            $this->db->execute();
            return $this->db->rowCount();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            // return -1;
        }
    }

    public function isNamaPenggunaUnique($nama_pengguna)
    {
        $query = "SELECT COUNT(*) as count FROM user WHERE nama_pengguna = :nama_pengguna";
        $this->db->query($query);
        $this->db->bind(':nama_pengguna', $nama_pengguna);
        $this->db->execute();

        $result = $this->db->single();
        return ($result['count'] == 0);
    }


    public function getCurrentUser()
    {
        if (isset($_SESSION['user_id'])) {
            $this->db->query('SELECT * FROM user WHERE id = :user_id');
            $this->db->bind('user_id', $_SESSION['user_id']);
            $this->db->execute();
            return $this->db->single();
        } else {
            return null;
        }
    }

}