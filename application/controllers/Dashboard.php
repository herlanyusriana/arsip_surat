<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_model');
        //$this->load->model('User_model'); // kalau ada login multi user
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        // Ambil data realtime
        $data['total_surat'] = $this->Surat_model->count_all();
        $data['jumlah_klasifikasi'] = $this->Surat_model->count_klasifikasi();
        $data['jumlah_pengguna'] = $this->db->count_all('users');
        $data['surat_terbaru'] = $this->Surat_model->get_terbaru(5);

        $this->load->view('template/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('template/footer');
    }
    public function profile()
{
    $data['title'] = "Profil Saya";
    $id = $this->session->userdata('id');
    $data['user'] = $this->db->get_where('users', ['id' => $id])->row_array();

    $this->load->view('template/header', $data);
    $this->load->view('user/profile', $data);
    $this->load->view('template/footer');
}

}
