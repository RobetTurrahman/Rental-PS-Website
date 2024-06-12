<?php

class Controller {
    public function view($view, $data = []) 
    {   
        if(!isset ($_SESSION['nama_pengguna'])){
            require_once '../app/views/' . $view . '.php';
            // require_once '../app/views/login/masuk.php';
        } 
        else {
            require_once '../app/views/' . $view . '.php';
        }
        
    }

    public function model($model) 
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
    public function updateSession()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Update session data based on the posted values
            $_SESSION['nama_pengguna'] = $_POST['nama_pengguna'] ?? '';
            $_SESSION['email'] = $_POST['email'] ?? '';
            $_SESSION['no_wa'] = $_POST['no_wa'] ?? '';
            $_SESSION['sandi'] = $_POST['sandi'] ?? '';

            // Send a response, you can customize this based on your needs
            echo json_encode(['success' => true]);
        }
    }

}