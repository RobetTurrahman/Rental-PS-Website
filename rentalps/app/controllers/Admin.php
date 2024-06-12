<?php

class Admin extends Controller {

    // untuk homepage
    public function homepage()
    {
        $this->view('layouts/header/admin');
        $this->view('admin/homepage');
        $this->view('layouts/footer');
    }

    // untuk management akun, paginasi
    public function management_akun($page = 1)
    {
        $perPage = 15;
        $startFrom = ($page - 1) * $perPage;
    
        // Retrieve a subset of accounts using offset and limit
        $data['management_akun'] = $this->model('Admin_model')->getAkunPerPage($startFrom, $perPage);
    
        // Get total number of accounts
        $totalRows = $this->model('Admin_model')->getTotalAkun();
    
        // Calculate total pages
        $totalPages = ceil($totalRows / $perPage);
    
        // Pass pagination data to the view
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;

        // echo "Total Pages: " . $data['totalPages'] . "<br>";
        // echo "Current Page: " . $data['currentPage'] . "<br>";
        // var_dump($data['management_akun']);

    
        // Load views
        $this->view('layouts/header/admin');
        $this->view('admin/management_akun', $data);
        $this->view('layouts/footer');
    }
    
    // untuk management ketersediaan
    public function management_ketersediaan()
    {
        // read
        $data['management_ketersediaan'] = $this->model('Admin_model')->ManajemenKetersediaan();
        // var_dump($data['management_ketersediaan']);
        $this->view('layouts/header/admin');
        $this->view('admin/management_ketersediaan', $data);
        $this->view('layouts/footer');
    }

    // untuk management order
    public function management_order()
    {
        $data['management_order'] = $this->model('Admin_model')->ReadManagementOrder();
        $this->view('layouts/header/admin');
        $this->view('admin/management_order', $data);
        $this->view('layouts/footer');
    }


    // fungsi untuk tolak order
    public function berhentiOrder($id_order) {
        $this->updateOrderStatus($id_order, 3);
    }

    // fungsi untuk konfirmasi order
    public function konfirmasiOrder($id_order) {
        // echo "Debugging: Inside konfirmasiOrder method"; 
        $this->updateOrderStatus($id_order, 2);
    }

    // fungsi untuk update order status
    private function updateOrderStatus($id_order, $status) {
        // var_dump($id_order, $status);

        $adminModel = $this->model('Admin_model');

        $adminModel->updateOrderStatus($id_order, $status);
        header("Location: /admin/management_order");
        exit;
    }


    // fungsi untuk input data
    public function input_data()
    {
        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            if ($this->model('Admin_model')->TambahDataInput($_POST) > 0) {
                echo '<script>alert("Data berhasil ditambahkan!");</script>';
                header('Location: ' . BASEURL . '/admin/homepage');
                exit;
            }
        }

        $this->view('layouts/header/admin');
        $this->view('admin/input_data');
        $this->view('layouts/footer');

    } 


    // fungsi untuk read history
    public function history()
    {
        $this->view('layouts/header/admin');
        $this->view('admin/history');
        $this->view('layouts/footer');
    }

    // fungsi untuk edit ps
    public function edit_ps($id_ps)
    {
        $data['management_ketersediaan'] = $this->model('Admin_model')->getPsById($id_ps);
        // var_dump($data['management_ketersediaan'] = $this->model('Admin_model')->getPsById($id_ps));
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama_ps = $_POST['nama_ps'];
            $jenis_ps = $_POST['id_jenis'];
            $status_ps = $_POST['id_status'];
                // var_dump($nama_ps, $jenis_ps, $status_ps);

    
            // Simpan data yang diedit ke dalam database
            $this->model('Admin_model')->updatePs($id_ps, $nama_ps, $jenis_ps, $status_ps);

            header('Location: ' . BASEURL . '/admin/management_ketersediaan');
            
            exit();
        }
        // var_dump($_POST);
    
        $this->view('layouts/header/admin');
        $this->view('admin/edit_ps', $data);
        $this->view('layouts/footer');
    }
    

    // fungsi untuk get rincian 
    public function rincian($id_order) {
        $bookingAdminModel = $this->model('Admin_model');

        $bookingDetails = $bookingAdminModel->getBookingDetailsById($id_order);

        if (!$bookingDetails) {
            echo 'Booking details not found.';
            return;
        }

        $this->view('layouts/header/admin');
        $this->view('admin/booking_rincian', ['bookingDetails' => $bookingDetails]);
        $this->view('layouts/footer');
    }

}