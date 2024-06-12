<?php

class User_model {
    private $table;
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser()
    {
        $this->db->query('SELECT * from ' . $this->table);
        $this->db->execute();
        return $this->db->all();
    }

    public function ReadBookingPS()
    {
        $this->db->query('SELECT * FROM ps');
        $this->db->execute();
        return $this->db->all();
    }

    public function ReadBookingPSById($id_ps)
{
    $this->db->query('SELECT * FROM ps WHERE id_ps = :id_ps');
    $this->db->bind(':id_ps', $id_ps);
    $this->db->execute();
    return $this->db->single();
}


    public function getHistoryDetail()
    {
        try {
            $userId = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : null;
            // var_dump($this->db->query('SELECT booking.*, user.nama_pengguna, status_order.status_ord, jenis_ps.nama_jenis FROM booking JOIN user ON booking.id_user = user.id_user JOIN status_order ON booking.id_status = status_order.id_status_order JOIN ps ON booking.id_ps = ps.id_ps JOIN jenis_ps ON ps.id_jenis = jenis_ps.id_jenis WHERE booking.id_user = :userId'));

            if ($userId) {
                $this->db->query('SELECT booking.*, user.nama_pengguna, status_order.status_ord, jenis_ps.nama_jenis FROM booking JOIN user ON booking.id_user = user.id_user JOIN status_order ON booking.id_status = status_order.id_status_order JOIN ps ON booking.id_ps = ps.id_ps JOIN jenis_ps ON ps.id_jenis = jenis_ps.id_jenis WHERE booking.id_user = :userId');
                $this->db->bind(':userId', $userId);
                $this->db->execute();

                return $this->db->all();
            } else {
                return [];
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return [];
        }
    }

    public function getUserById($userId)
    {
        $this->db->query('SELECT * FROM user WHERE id_user = :user_id');
        $this->db->bind('user_id', $userId);
        $this->db->execute();
        return $this->db->single();
    }

    public function updateUserProfile($userId, $newData)
    {
        $query = "UPDATE user SET nama_pengguna = :nama_pengguna, email = :email, no_wa = :no_wa, sandi = :sandi WHERE id_user = :user_id";

        $this->db->query($query);
        $this->db->bind('user_id', $userId);
        $this->db->bind('nama_pengguna', $newData['nama_pengguna']);
        $this->db->bind('email', $newData['email']);
        $this->db->bind('no_wa', $newData['no_wa']);
        $this->db->bind('sandi', $newData['sandi']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getRincianByIdUser($id_user)
    {
        $query = "SELECT 
        u.nama_pengguna,
        p.nama_ps,
        jp.nama_jenis,
        th.harga * b.estimasi * 1000 AS total_biaya,
        sp.status_ps,
        b.waktu_mulai,
        b.estimasi,
        b.tanggal
        FROM 
            booking b
        JOIN 
            user u ON b.id_user = u.id_user
        JOIN 
            ps p ON b.id_ps = p.id_ps
        JOIN 
            jenis_ps jp ON p.id_jenis = jp.id_jenis
        JOIN 
            total_harga th ON b.id_harga = th.id_harga
        JOIN 
            status_ps sp ON p.id_status = sp.id_status
        WHERE
            u.id_user = :id_user";

        $this->db->query($query);
        $this->db->bind('id_user', $id_user);
        $this->db->execute();
    
        return $this->db->all();
    }

    

        
}