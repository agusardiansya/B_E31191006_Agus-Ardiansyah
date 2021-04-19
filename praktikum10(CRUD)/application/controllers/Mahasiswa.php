<?php

class Mahasiswa extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // Load data model mahasiswa_model di constructor
    $this->load->model('Mahasiswa_model');
  }

  // Function untuk menampilkan halaman tampil data
  public function index()
  {
    $data['user'] = $this->Mahasiswa_model->getAll()->result();
    $this->template->views('crud/home_mahasiswa', $data);
  }

  // Function untuk menampilkan form tambah data baru
  public function tambah()
  {
    $this->template->views('crud/tambah_mahasiswa');
  }

  // Function untuk memproses form yang disubmit untuk kemudian dimasukkan ke database
  public function input()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('pass');
    $grup = $this->input->post('grup');

    $data = array(
      'username' => $username,
      'password' => $password,
      'grup' => $grup,
    );
    $this->Mahasiswa_model->input_data($data, 'tm_user');
    redirect('Mahasiswa/index');
  }

}