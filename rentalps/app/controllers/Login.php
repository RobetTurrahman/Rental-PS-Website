<?php

class Login extends Controller {
    
    // fungsi untuk login user
    public function masuk() 
    {
        try {
            // session_start();

            $data['title'] = 'Login';
            
            if ($_SERVER["REQUEST_METHOD"] === 'POST') {
                $nama_pengguna = $_POST['nama_pengguna'];
                $sandi = $_POST['sandi'];
                
                $data['masuk'] = $this->model('Auth_model')->getUser($nama_pengguna, $sandi);
                
                if (!empty($data['masuk'])) {
                    $_SESSION['nama_pengguna'] = $data['masuk'][0]['nama_pengguna'];
                    $_SESSION['id_user'] = $data['masuk'][0]['id_user'];
                    $_SESSION['email'] = $data['masuk'][0]['email'];
                    $_SESSION['no_wa'] = $data['masuk'][0]['no_wa'];
                    $_SESSION['sandi'] = $data['masuk'][0]['sandi'];
                
                    header("Location:?controller=User&method=homepage");
                    exit;
                } else {
                    $data['error'] = 'Login gagal. Periksa nama pengguna dan kata sandi Anda.';
                    // echo $data['error'];
                    echo '<script>alert("' . $data['error'] . '");</script>';
                }
            }
            
            $this->view('login/masuk', $data);

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // fungsi untuk lupa sandi
    public function lupa_sandi()
    {
        if (!isset($_SESSION['id_user'])) {
            // Initialize error message
            $data['error'] = '';
    
            if ($_SERVER["REQUEST_METHOD"] === 'POST') {
                $sandi = $_POST['sandi'];
    
                // Basic form validation for password
                if (empty($sandi)) {
                    $data['error'] = 'Kata sandi harus diisi.';
                } else if (!preg_match('/^(?=.*[A-Z])(?=.*\d).{6,}$/', $sandi)) {
                    $data['error'] = 'Kata sandi harus memiliki setidaknya 1 huruf kapital, 1 angka, dan minimal 6 karakter.';
                } else {
                    if ($this->model('Auth_model')->UpdatePassword($_POST) > 0) {
                        $data['alert'] = 'Data berhasil diubah';
                        echo '<script>alert("' . $data['alert'] . '");</script>';
                        echo '<script>
                                setTimeout(function() {
                                    window.location.href = "' . BASEURL . '?controller=login&method=masuk";
                                }, 1000); // 1000 milliseconds (1 second) delay
                              </script>';
    
                        exit;
                    } else {
                        $data['error'] = 'Gagal mengubah kata sandi. Silakan coba lagi.';
                    }
                }

                $_SESSION['lupa_sandi_error'] = $data['error'];
    
                echo '<script>
                        setTimeout(function() {
                            window.location.href = "' . BASEURL . '?controller=login&method=lupa_sandi";
                        }, 1000); // 1000 milliseconds (1 second) delay
                      </script>';
                exit;
            }

            if (isset($_SESSION['lupa_sandi_error'])) {
                $data['error'] = $_SESSION['lupa_sandi_error'];
                unset($_SESSION['lupa_sandi_error']);
            }
    
            $this->view('login/lupa_sandi', $data);
        }
    }
    
    // fungsi untuk daftar 
    public function daftar()
    {
        try {
            $data['title'] = 'Daftar';
    
            if ($_SERVER["REQUEST_METHOD"] === 'POST') {
                $nama_pengguna = $_POST['nama_pengguna'];
                $email = $_POST['email'];
                $no_wa = $_POST['no_wa'];
                $sandi = $_POST['sandi'];
                $ulangi_sandi = $_POST['ulangi_sandi'];
    
                $isNamaPenggunaUnique = $this->model('Auth_model')->isNamaPenggunaUnique($nama_pengguna);
    
                if (!$isNamaPenggunaUnique) {
                    $data['error'] = 'Nama pengguna sudah digunakan. Pilih nama pengguna yang berbeda.';
                    echo '<script>alert("' . $data['error'] . '");</script>';
                } else if (empty($nama_pengguna) || empty($email) || empty($no_wa) || empty($sandi) || empty($ulangi_sandi)) {
                    $data['error'] = 'Semua field harus diisi.';
                    echo '<script>alert("' . $data['error'] . '");</script>';
                } else if (strlen($nama_pengguna) < 4) {
                    $data['error'] = 'Nama pengguna harus memiliki setidaknya 4 karakter.';
                    echo '<script>alert("' . $data['error'] . '");</script>';
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $data['error'] = 'Format email tidak valid.';
                    echo '<script>alert("' . $data['error'] . '");</script>';
                } else if (!is_numeric($no_wa) || strlen($no_wa) < 10) {
                    $data['error'] = 'Nomor WhatsApp harus berupa angka dan minimal 10 digit.';
                    echo '<script>alert("' . $data['error'] . '");</script>';
                } else if (!preg_match('/^(?=.*[A-Z])(?=.*\d).{6,}$/', $sandi)) {
                    $data['error'] = 'Kata sandi harus memiliki setidaknya 1 huruf kapital, 1 angka, dan minimal 6 karakter.';
                    echo '<script>alert("' . $data['error'] . '");</script>';
                } else if ($sandi !== $ulangi_sandi) {
                    $data['error'] = 'Kata sandi tidak cocok dengan konfirmasi kata sandi.';
                    echo '<script>alert("' . $data['error'] . '");</script>';
                } else {    
                    if ($this->model('Auth_model')->tambahDataUser($_POST) > 0) {
                        $data['alert'] = 'Anda berhasil melakukan registrasi';
                        echo '<script>alert("' . $data['alert'] . '");</script>';
    
                        echo '<script>
                                setTimeout(function() {
                                    window.location.href = "' . BASEURL . '/login/masuk";
                                }, 1000); // 1000 milliseconds (1 second) delay
                              </script>';
    
                        exit;
                    }
                }
            }
    
            $this->view('login/daftar', $data);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}