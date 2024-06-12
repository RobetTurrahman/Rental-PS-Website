<?php

class User extends Controller{
    public function profil()
    {
        $data = [];

        $data['nama_pengguna'] = isset($_SESSION['nama_pengguna']) ? $_SESSION['nama_pengguna'] : '';
        $data['id_user'] = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : '';
        $data['email'] = isset($_SESSION['email']) ? $_SESSION['email'] : '';
        $data['no_wa'] = isset($_SESSION['no_wa']) ? $_SESSION['no_wa'] : '';
        $data['sandi'] = isset($_SESSION['sandi']) ? $_SESSION['sandi'] : '';

        $this->view('layouts/header/user');
        $this->view('user/profil', $data);
        $this->view('layouts/footer');
    }

    public function homepage() 
    {
        $this->view('layouts/header/user');
        $this->view('user/homepage');
        $this->view('layouts/footer');
    }

    public function booking()

    // ini udah bener
    {
        try {
            $psData = $this->model('User_model')->ReadBookingPS();

            $data['psData'] = $psData;
            // var_dump($psData);

            $this->view('layouts/header/user');
            $this->view('user/booking', $data);
            $this->view('layouts/footer');
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function about()
    {
        $this->view('layouts/header/user');
        $this->view('user/about');
        $this->view('layouts/footer');
    }

    public function logout() {
        session_unset();
        session_destroy();

        header('Location: ' . BASEURL . '/login');
        exit();
    }


    public function edit_profil()
    {
        $userId = $_SESSION['id_user'] ?? null;
    
        if ($userId) {
            $userModel = $this->model('User_model');
    
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = [
                    'id_user' => $userId,
                    'nama_pengguna' => $_POST['nama_pengguna'] ?? '',
                    'email' => $_POST['email'] ?? '',
                    'no_wa' => $_POST['no_wa'] ?? '',
                    'sandi' => $_POST['sandi'] ?? '',
                ];
    
                $userModel->updateUserProfile($data['id_user'], $data);
    
                $_SESSION['nama_pengguna'] = $data['nama_pengguna'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['no_wa'] = $data['no_wa'];
                $_SESSION['sandi'] = $data['sandi'];
    
                if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                    echo json_encode(['success' => true, 'message' => 'Data berhasil disimpan.']);
                    exit;
                }
            } else {
                $userData = $userModel->getUserById($userId);
    
                $data = [
                    'nama_pengguna' => $userData['nama_pengguna'],
                    'email' => $userData['email'],
                    'no_wa' => $userData['no_wa'],
                    'sandi' => $userData['sandi'],
                ];
    
                $this->view('layouts/header/user');
                $this->view('user/edit_profil', $data);
                $this->view('layouts/footer');
            }
        }
    }
    
    // var_dump($data['psData']['id_ps']);
    // var_dump($psDataaa);
    // var_dump('Id Ps',$psDataa['id_ps']);
    // var_dump('nama Ps',$psDataa['nama_ps']);


    // $id_psp = (int) $id_ps;
    // var_dump($id_ps); //1
    // var_dump($estimasi); //2
    // var_dump($waktu_mulai); //3
    // var_dump($tanggal); //4
    // var_dump($id_harga); //5
    // var_dump($perjanjian); //6
    // var_dump($id_user); //7
    // var_dump($id_status);

    public function isi_data($id_ps)
    {
        $data['psData'] = $this->model('User_model')->ReadBookingPSById($id_ps);
    
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $id_ps = intval($_POST['id_ps']); 
            $estimasi = intval($_POST['estimasi']);
            $waktu_mulai = $_POST['waktu_mulai'];
            $tanggal = $_POST['tanggal'];
            $id_harga = $estimasi;
            $perjanjian = isset($_POST['perjanjian']) ? 1 : 0;
            $id_user = $_SESSION['id_user'];
            $id_status = $perjanjian;
            
            $result = $this->model('IsiData_model')->createBooking($estimasi, $waktu_mulai, $tanggal, $perjanjian, $id_user, $id_ps, $id_harga, $id_status);
            
            if ($result) {
                // Return a success response if needed
                echo json_encode(["status" => "success"]);
                exit();
            } else {
                // Return an error response if needed
                echo json_encode(["status" => "error"]);
                exit();
            }
        }
    
        $this->view('layouts/header/user');
        $this->view('user/isi_data', $data);
        $this->view('layouts/footer');
    }
    
    public function history()
    {
        $data = $this->model('User_model')->getHistoryDetail();
        $this->view('layouts/header/user');
        $this->view('user/history', $data);
        $this->view('layouts/footer');
    }

    public function rincian()
    {
        session_start();

        $id_user = $_SESSION['id_user'] ?? null;
    
        if ($id_user) {
            $data['rincian'] = $this->model('User_model')->getRincianByIdUser($id_user);
            
            $this->view('layouts/header/user');
            $this->view('user/rincian', $data);
            $this->view('layouts/footer');
        } else {
            echo "ID pengguna tidak ditemukan dalam sesi.";
        }
    }

}