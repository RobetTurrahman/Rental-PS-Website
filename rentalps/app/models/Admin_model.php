<?php

class Admin_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAdmin($nama_admin, $sandi)
    {
        $this->db->query('SELECT * from user WHERE nama_admin = :nama_admin AND sandi = :sandi');
        $this->db->bind('nama_admin', $nama_admin);
        $this->db->bind('sandi', $sandi);
        $this->db->execute();
        return $this->db->all();
    }

    // dashboard admin, read manajemen order
    public function ReadManagementOrder()
    {
        $this->db->query('SELECT 
        b.id_order,
        b.tanggal,
        u.nama_pengguna,
        b.estimasi,
        b.waktu_mulai,
        ADDTIME(b.waktu_mulai, SEC_TO_TIME(b.estimasi * 3600)) AS waktu_berakhir,
        so.status_ord AS status,
        p.nama_ps
    FROM 
        booking b
    JOIN 
        user u ON b.id_user = u.id_user
    JOIN 
        status_order so ON b.id_status = so.id_status_order
    JOIN 
        ps p ON b.id_ps = p.id_ps;
    ');

        $this->db->execute();
        return $this->db->all();

    }


    // dashboard admin, manajemen ketersediaan
    public function ManajemenKetersediaan()
    {
        $this->db->query('SELECT 
        p.id_ps,
        p.nama_ps,
        j.nama_jenis,
        sp.status_ps
    FROM 
        ps p
    JOIN 
        jenis_ps j ON p.id_jenis = j.id_jenis
    JOIN 
        status_ps sp ON p.id_status = sp.id_status;
    ');
        $this->db->execute();
        return $this->db->all();
    }

    // dashboard admin, manajemen akun
    public function getAkunPerPage($startFrom, $perPage)
{
    $query = 'SELECT * FROM user LIMIT :startFrom, :perPage';
    $this->db->query($query);
    $this->db->bind(':startFrom', $startFrom);
    $this->db->bind(':perPage', $perPage);
    $this->db->execute();

    return $this->db->all();
}



public function getTotalAkun()
{
    $query = 'SELECT COUNT(*) as total FROM user';
    $this->db->query($query);
    $this->db->execute();

    $result = $this->db->single();

    return $result['total'];
}


public function updateOrderStatus($id_order, $status) {
    $this->db->query('UPDATE booking SET id_status = :status WHERE id_order = :id_order');
    $this->db->bind(':status', $status);
    $this->db->bind(':id_order', $id_order);
    // var_dump($this->db->query('UPDATE booking SET id_status = :status WHERE id_order = :id_order'));

    // Execute
    if ($this->db->execute()) {
        return true;
    } else {
        // var_dump($this->db->query('UPDATE booking SET id_status = :status WHERE id_order = :id_order'));
        return false;
    }
}

// Admin_model

public function berhentiOrder($id_order) {
    $status_berhenti = 3;
    // UPDATE `booking` SET `id_status` = '2' WHERE `booking`.`id_order` = 1;

    $this->db->query('UPDATE booking SET id_status = :status WHERE id_order = :id_order');
    $this->db->bind(':status', $status_berhenti);
    $this->db->bind(':id_order', $id_order);

    // Execute
    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }
}

public function getBookingDetailsById($id_order) {
    $this->db->query('SELECT * FROM booking_admin WHERE id_order = :id_order');
    $this->db->bind(':id_order', $id_order);

    return $this->db->single();
}

public function getPsById($id_ps)
{
    $query = "SELECT * FROM ps WHERE id_ps = :id_ps";
    $this->db->query($query);
    $this->db->bind(':id_ps', $id_ps);
    return $this->db->single();
}

public function updatePs($id_ps, $nama_ps, $nama_jenis, $status_ps)
{
    $query = "UPDATE ps SET nama_ps = :nama_ps, id_jenis = :nama_jenis, id_status = :status_ps WHERE id_ps = :id_ps";
    $this->db->query($query);
    $this->db->bind(':id_ps', $id_ps);
    $this->db->bind(':nama_ps', $nama_ps);
    $this->db->bind(':nama_jenis', $nama_jenis);
    $this->db->bind(':status_ps', $status_ps);
    $this->db->execute();
    return $this->db->rowCount();
}

public function getEditPsById($id_ps){
    $query = 'SELECT *
            FROM ps
            WHERE id_ps = :id_ps;';

    $this->db->query($query);
    $this->db->execute();
    return $this->db->all();

}


}
