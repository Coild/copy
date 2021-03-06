<?php 
class Admin extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Dashboard_model');
        $this->load->model('Laporan_model');
        $this->load->library('template');
    }

    // function index()
    // {
    //     $data['user'] = $this->Admin_model->getAll()->result();
    //     $data['jumlahUser'] = $this->Dashboard_model->getJumlahUser();
    //     $data['jumlahPasien'] = $this->Dashboard_model->getJumlahPasien();
    //     $data['jumlahDokter'] = $this->Dashboard_model->getJumlahDokter();
    //     $data['jumlahApoteker'] = $this->Dashboard_model->getJumlahApoteker();
    //     $data['jumlahKunjunganHari'] = $this->Dashboard_model->getKunjunganHari();
    //     $data['jumlahKunjunganBulan'] = $this->Dashboard_model->getKunjunganBulan();
    //     $data['jumlahAUmum'] = $this->Dashboard_model->getAntrianUmum();
    //     $data['jumlahAGigi'] = $this->Dashboard_model->getAntrianGigi();
    //     $this->template->tampil('Admin/dashboard_view', $data);
    // }

    function index()
    {
        $data['staff'] = $this->Admin_model->getStaff();
        $data['antriIesp'] = $this->Dashboard_model->getAntriIesp();
        $data['antriMana'] = $this->Dashboard_model->getAntriMana();
        $data['antriAkun'] = $this->Dashboard_model->getAntriAkun();
        $data['jumlahIesp'] = $this->Dashboard_model->getJumlahIesp();
        $data['jumlahMana'] = $this->Dashboard_model->getJumlahMana();
        $data['jumlahAkun'] = $this->Dashboard_model->getJumlahAkun();
        $this->template->tampil('Admin/dashboard_view', $data);
    }


    public function pendaftaran_user()
    {
        $data['user'] = $this->Admin_model->getAll()->result();
        $data['akses'] = $this->Admin_model->getDaftar()->result();
        $this->template->tampil('Admin/pendaftaran_user', $data);
    }

    public function input()
    {
        $status = $this->input->post('status');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('gender');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $prodi = $this->input->post('prodi');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = array(
            'status' => $status,
            'nim' => $nim,
            'nama' => $nama,
            'gender' => $jenis_kelamin,
            'tmp_lahir' => $tempat_lahir,
            'tgl_lahir' => $tanggal_lahir,
            'alamat' => $alamat,
            'prodi' => $prodi,
            'no_hp' => $no_hp,
            'email' => $email,
            'password' => md5($password)
        );
        $akses = 3;
        $this->Admin_model->input_data($data, 'user');
        // redirect('Admin/pendaftaran_user');
        if ($akses == 2) {
            redirect('Master/DataPasien');
        } elseif ($akses == 3) {
            redirect('Master/DataDokter');
        } else if ($akses == 4) {
            redirect('Master/DataDokter');
        } else if ($akses == 5) {
            redirect('Master/DataApoteker');
        }
    }

    public function antrian_umum()
    {
        $data['antrian'] = $this->Admin_model->getAntrianUmum();
        $data['akses']=2;
        $this->template->tampil('Admin/antrian_umum', $data);
    }




    public function antrian_iesp()
    {
        $data['antrian'] = $this->Admin_model->list_iesp();
        $this->template->tampil('Admin/antrian_gigi', $data);
    }

    public function antrian_mana()
    {
        $data['antrian'] = $this->Admin_model->list_mana();
        $this->template->tampil('Admin/antrian_gigi', $data);
    }

    public function antrian_akun()
    {
        $data['antrian'] = $this->Admin_model->list_akun();
        $this->template->tampil('Admin/antrian_gigi', $data);
    }

    public function confirm($nim, $hal)
    {  // echo $data." ".$hal;
        $this->Admin_model->konfir($nim,$hal);
        $data['antrian'] = $this->Admin_model->list_iesp();
        $this->template->tampil('Admin/antrian_gigi', $data);
        // $this->template->tampil('Admin/antrian_gigi', $data);
    }

    public function riwayat($nim, $hal)
    {  // echo $data." ".$hal;
        $this->Admin_model->pindah($nim,$hal);
        $data['antrian'] = $this->Admin_model->list_iesp();
        $this->template->tampil('Admin/antrian_gigi', $data);
        // $this->template->tampil('Admin/antrian_gigi', $data);
    }



    public function Laporan()
    {
        if (isset($_GET['filter']) && !empty($_GET['filter'])) { // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if ($filter == '1') { // Jika filter nya 1 (per tanggal)
                $tgl =  $_GET['tanggal'];

                $ket = 'Data Transaksi Tanggal ' . date('d-m-y', strtotime($tgl));
                $url_cetak = 'Admin/cetak?filter=1&tanggal=' . $tgl;
                $transaksi = $this->Laporan_model->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di Laporan_model
            } else if ($filter == '2') { // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

                $ket = 'Data Transaksi Bulan ' . $nama_bulan[$bulan] . ' ' . $tahun;
                $url_cetak = 'Admin/cetak?filter=2&bulan=' . $bulan . '&tahun=' . $tahun;
                $transaksi = $this->Laporan_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Laporan_model
            } else { // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $ket = 'Data Transaksi Tahun ' . $tahun;
                $url_cetak = 'Admin/cetak?filter=3&tahun=' . $tahun;
                $transaksi = $this->Laporan_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di Laporan_model
            }
        } else { // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $url_cetak = 'Admin/cetak';
            $transaksi = $this->Laporan_model->view_all(); // Panggil fungsi view_all yang ada di Laporan_model
        }

        $data['ket'] = $ket;
        $data['url_cetak'] = base_url($url_cetak);
        $data['transaksi'] = $transaksi;
        $data['option_tahun'] = $this->Laporan_model->option_tahun();
        $this->template->tampil('Admin/laporan_view', $data);
    }

    public function cetak()
    {
        if (isset($_GET['filter']) && !empty($_GET['filter'])) { // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if ($filter == '1') { // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];

                $ket = 'Data Transaksi Tanggal ' . date('d-m-y', strtotime($tgl));
                $transaksi = $this->Laporan_model->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di Laporan_model
            } else if ($filter == '2') { // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

                $ket = 'Data Transaksi Bulan ' . $nama_bulan[$bulan] . ' ' . $tahun;
                $transaksi = $this->Laporan_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Laporan_model
            } else { // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $ket = 'Data Transaksi Tahun ' . $tahun;
                $transaksi = $this->Laporan_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di Laporan_model
            }
        } else { // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $transaksi = $this->Laporan_model->view_all(); // Panggil fungsi view_all yang ada di Laporan_model
        }

        $data['ket'] = $ket;
        $data['transaksi'] = $transaksi;

        ob_start();
        $this->load->view('Admin/print', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/plugin/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('L', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data Transaksi.pdf', 'D');
    }
}
