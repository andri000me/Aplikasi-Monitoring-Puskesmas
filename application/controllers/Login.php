<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('tglindo_helper');
       $this->load->helper('cleanurl_helper');
    $this->load->model('m_login');
    $this->load->model('model_berita');
    $this->load->library('pagination','form_validation');
    $this->load->helper(array('url','html','text'));
  }

  public function index()
  {
    $this->load->view('template_a'); 
    $this->load->view('v_login');
  }

  function aksi_login(){
    $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
    $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

    $user = $this->m_login->get($username); // Panggil fungsi get yang ada di UserModel.php

    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      
                        <strong>Username Tidak Ditemukan!</strong> '.$error.'.
                     </div>'
                   );
     redirect('login'); // Redirect ke halaman login
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'authenticated'=>true, // Buat session authenticated dengan value true
          'username'=>$user->username,
          'nama'=>$user->nama,
          'id_user'=>$user->id_user,
          'kategori'=>$user->kategori,
          'level'=>$user->level
        );

        $this->session->set_userdata($session); $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      
                        <strong>Selamat Datang Admin!</strong>'.$error.'.
                     </div>'
                   );
        redirect('dashboard');
      }else{
        $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      
                       <strong>Password Yang Anda Masukkan Salah!</strong>'.$error.'.
                     </div>'
                   );
        redirect('login'); // Redirect ke halaman login
      }
    }
}

function logout(){
    $this->session->sess_destroy(); // Hapus semua session
        Redirect('login');
   }

}

/* AJ3 */
/* ColorlIb*/