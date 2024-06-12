<?php

class IsiData_model
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getPsDetailsById($id_ps)
    {
        $query = "SELECT * FROM your_ps_table WHERE id_ps = :id_ps";
        $this->db->query($query);
        $this->db->bind(':id_ps', $id_ps);
        $this->db->execute();

        return $this->db->single();
    }


    public function createBooking($estimasi, $waktu_mulai, $tanggal, $perjanjian, $id_user, $id_ps, $id_harga, $id_status)
    {
        $query = "INSERT INTO booking (estimasi, waktu_mulai, tanggal, perjanjian, id_user, id_ps, id_harga, id_status)
                  VALUES (:estimasi, :waktu_mulai, :tanggal, :perjanjian, :id_user, :id_ps, :id_harga, :id_status)";
    
        $this->db->query($query);
    
        $this->db->bind(':estimasi', $estimasi);
        $this->db->bind(':waktu_mulai', $waktu_mulai);
        $this->db->bind(':tanggal', $tanggal);
        $this->db->bind(':perjanjian', $perjanjian);
        $this->db->bind(':id_user', $id_user);
        $this->db->bind(':id_ps', $id_ps);
        $this->db->bind(':id_harga', $id_harga);
        $this->db->bind(':id_status', $id_status);
    
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            // Log or handle the error
            error_log("Error in createBooking: " . $e->getMessage());
            return false; // Return false to indicate failure
        }
    }
    
    public function getStatusBasedOnAction($perjanjian)
{
    // Tambahkan logika untuk menentukan status berdasarkan aksi (konfirmasi atau berhenti)
    // Misalnya, jika $perjanjian == 1, maka return 2 (konfirmasi), jika $perjanjian == 0, return 3 (berhenti)
    return ($perjanjian == 1) ? 2 : 3;
}

    
    public function getIdUserByCredentials($nama_pengguna, $no_wa)
    {
        $query = "SELECT id_user FROM your_user_table WHERE nama_pengguna = :nama_pengguna AND no_wa = :no_wa";
        $this->db->query($query);
        $this->db->bind(':nama_pengguna', $nama_pengguna);
        $this->db->bind(':no_wa', $no_wa);
        $this->db->execute();

        $result = $this->db->single();

        return $result ? $result['id_user'] : null;
    }

    public function addBooking($data) {
        $this->db->query('INSERT INTO booking_admin (nama, no_wa, pilih_ps, estimasi, waktu_mulai, tanggal, keterangan) VALUES (:nama, :no_wa, :pilih_ps, :estimasi, :waktu_mulai, :tanggal, :keterangan)');

        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':no_wa', $data['no_wa']);
        $this->db->bind(':pilih_ps', $data['pilih_ps']);
        $this->db->bind(':estimasi', $data['estimasi']);
        $this->db->bind(':waktu_mulai', $data['waktu_mulai']);
        $this->db->bind(':tanggal', $data['tanggal']);
        $this->db->bind(':keterangan', $data['keterangan']);

        return $this->db->execute();
    }

    public function getBookingDetailsByName($nama) {
        $this->db->query('SELECT * FROM booking_admin');

        $this->db->execute();
        return $this->db->all();
    }

    
}
