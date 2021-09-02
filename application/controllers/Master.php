<?php 
class Master extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_model');
        $this->load->model('Admin_model');
        $this->load->library('template');
    }

    function index($id_user)
    {
        $where = array('nim' => $id_user);
        $data['user'] = $this->Master_model->tampil($where, 'user')->row_array();
        $this->template->tampil('Admin/lihat_view', $data);
    }

    public function DataAkses()
    {
        $data['akses'] = $this->Admin_model->getAkses();
        $this->template->tampil('Admin/DataAkses_view', $data);
    }

    public function editAkses($id)
    {
        $where = array('id_akses' => $id);
        $data['akses'] = $this->Admin_model->edit_data($where, 'tb_akses')->result();
        $data['akses'] = $this->Admin_model->getAkses();
        $this->template->tampil('Admin/edit_DataAkses', $data);
    }

    public function update()
    {
        $nim = $this->input->post('nim');
        $status = $this->input->post('status');
        $no_identitas = $this->input->post('no_identitas');
        $nama = $this->input->post('nama');
        $gender = $this->input->post('jk');
        $tmp_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tanggal_lahir');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $prodi = $this->input->post('prodi');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = array(
            'status' => $status,
            'nim' => $nim,
            'nama' => $nama,
            'gender' => $gender,
            'tmp_lahir' => $tmp_lahir,
            'tgl_lahir' => $tgl_lahir,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'prodi' => $prodi,
            'email' => $email,
            'password' => md5($password)
        );
        $where = array('nim' => $nim);
        $this->Master_model->update_data($where, $data, 'user');
        // redirect('Admin');
        if ($prodi=== "IESP") {
            redirect('Master/DataIESP');
        } elseif ($prodi=== "Manajemen") {
            redirect('Master/DataManajemen');
        } else if ($prodi=== "Akuntan") {
            redirect('Master/DataAkuntan');
        } else {
            redirect('Admin');
        }
    }

    
    public function hapusIesp($id_user)
    {
        $where = array('nim' => $id_user);
        $this->Master_model->hapus_data($where, 'user');
        redirect('Master/DataIESP');
    }

    public function hapusMana($id_user)
    {
        $where = array('nim' => $id_user);
        $this->Master_model->hapus_data($where, 'user');
        redirect('Master/DataManajemen');
    }

    public function hapusAkun($id_user)
    {
        $where = array('nim' => $id_user);
        $this->Master_model->hapus_data($where, 'user');
        redirect('Master/DataAkuntan');
    }

    public function DataIESP()
    {
        $data['apoteker'] = $this->Master_model->getIesp()->result();
        $this->template->tampil('Admin/DataIESP_view', $data);
    }

    public function DataManajemen()
    {
        $data['apoteker'] = $this->Master_model->getManajemen()->result();
        $this->template->tampil('Admin/DataManajemen_view', $data);
    }

    public function DataAkuntan()
    {
        $data['apoteker'] = $this->Master_model->getAkuntan()->result();
        $this->template->tampil('Admin/DataAkuntan_view', $data);
    }

    public function edit($nim)
    {
        $where = array('nim' => $nim);
        // $data['apoteker'] = $this->Master_model->edit_data($where, 'user')->result();
        // $data['dokter'] = $this->Master_model->edit_data($where, 'user')->result();
        $data['user'] = $this->Master_model->edit_data($where, 'user')->result();
        $this->template->tampil('Admin/edit_Data', $data);
    }



    public function DataDokter()
    {
        $data['dokter'] = $this->Master_model->getDokter()->result();
        $this->template->tampil('Admin/DataDokter_view', $data);
    }

    public function DataPasien()
    {
        $data['pasien'] = $this->Master_model->getPasien()->result();
        $this->template->tampil('Admin/DataPasien_view', $data);
    }

    public function DataPoli()
    {
        $data['poli'] = $this->Master_model->getPoli()->result();
        $this->template->tampil('Admin/DataPoli_view', $data);
    }

    public function DataStatus()
    {
        $data['status'] = $this->Master_model->getStatus()->result();
        $this->template->tampil('Admin/DataStatus_view', $data);
    }
}
