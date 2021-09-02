<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('auth/login_view');
    }

    public function cek_log()
    {
        $username = $this->input->post('txt_user');
        $password =  md5($this->input->post('txt_pass'));
        $cek = $this->Login_model->login($username, $password, 'tb_user')->result();
		var_dump($cek);
		var_dump($username);
		
		var_dump($password);
        if ($cek != FALSE) {
            foreach ($cek as $row) {
                $id = $row->id_user;
                $user = $row->username;
                $foto = $row->foto;
                $akses = $row->id_akses;
                $nama = $row->nama;
            }
            $this->session->set_userdata('session_id', $id);
            $this->session->set_userdata('session_user', $user);
            $this->session->set_userdata('session_foto', $foto);
            $this->session->set_userdata('session_akses', $akses);
            $this->session->set_userdata('session_nama', $nama);
            // redirect('Admin');
            if ($akses == 1) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat, ' . $nama . ' Berhasil Login sebagai Admin <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Admin');
            } elseif ($akses == 2) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat, ' . $nama . ' Berhasil Login sebagai Pasien <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Pasien');
            } else if ($akses == 3) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat, ' . $nama . ' Berhasil Login sebagai Dokter Umum <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Dokter');
            } else if ($akses == 4) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat, ' . $nama . ' Berhasil Login sebagai Dokter Gigi <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Dokter');
            } else if ($akses == 5) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat, ' . $nama . ' Berhasil Login sebagai Apoteker <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Apoteker');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal! Mohon Periksa kembali.</div>');
            $this->load->view('auth/login_view');
        }
    }


    public function login()
    {
        $username = $this->input->post('txt_user');
        $password =  md5($this->input->post('txt_pass'));
        $cek = $this->Login_model->masuk($username, $password, 'user')->result();
        var_dump($cek);
        var_dump($username);
        
        var_dump($password);
        if ($cek != FALSE) {
            foreach ($cek as $row) {
                $nim = $row->nim;
                $nama = $row->nama;
                $prodi = $row->prodi;
                $foto = $row->foto;
                $status = $row->status;
            }
            $this->session->set_userdata('nama', $nama);
            $this->session->set_userdata('nim', $nim);
            $this->session->set_userdata('foto', $foto);
            $this->session->set_userdata('status', $status);
            $this->session->set_userdata('prodi', $prodi);


            var_dump($_SESSION);
            // redirect('Admin');
            if ($status == 1) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat, ' . $nama . ' Berhasil Login sebagai Admin <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Admin');
            } elseif ($status == 2) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat, ' . $nama . ' Berhasil Login sebagai Pasien <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Pasien');
            } 
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal! Mohon Periksa kembali.</div>');
            $this->load->view('auth/login_view');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('nim');
        $this->session->unset_userdata('foto');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('prodi');
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
