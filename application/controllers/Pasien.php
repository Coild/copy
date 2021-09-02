<?php
class Pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Dashboard_model');
        $this->load->model('Pasien_model');
        $this->load->library('template');
    }

    function index()
    {
        $data['antriIesp'] = $this->Dashboard_model->getJumlahIesp();
        $data['antriMana'] = $this->Dashboard_model->getJumlahMana();
        $data['antriAkun'] = $this->Dashboard_model->getJumlahAkun();
        $this->template->tampil('Pasien/pDashboard_view', $data);
    }

    public function Riwayat()
    {
        $data['riwayat'] = $this->Pasien_model->getRiwayat()->result();
        
        $this->template->tampil('Pasien/pRiwayat_view', $data);
    }

    public function Antrian()
    {
        $data['khs'] = $this->Pasien_model->getKhs()->row_array();
        $data['skl'] = $this->Pasien_model->getSkl()->row_array();
        $data['trans'] = $this->Pasien_model->getTrans()->row_array();
        $data['antrikhs'] = $this->Pasien_model->getJKhs()->row_array();
        $data['antriskl'] = $this->Pasien_model->getJSkl()->row_array();
        $data['antritrans'] = $this->Pasien_model->getJTrans()->row_array();
        // $data['jumlahAUmum'] = $this->Dashboard_model->getAntrianUmum();
        // $data['jumlahAGigi'] = $this->Dashboard_model->getAntrianGigi();
        // $data['selesaiUmum'] = $this->Pasien_model->selesaiUmum()->row_array();
        // $data['selesaiGigi'] = $this->Pasien_model->selesaiGigi()->row_array();
        $this->template->tampil('Pasien/pAntrian_view', $data);
    }

    public function ambilKHS()
    {
        $data['ambil'] = $this->Pasien_model->insertKHS();
        $data['antrian'] = $this->Pasien_model->cetakKHS();
        header('location:'.site_url().'Pasien/Antrian');
        // $this->load->view('Pasien/pCetakKrs_view', $data);

    }
 
    public function ambilSKL()
    {
        $data['ambil'] = $this->Pasien_model->insertSKL();
        $data['antrian'] = $this->Pasien_model->cetakSKL();
        header('location:'.site_url().'Pasien/Antrian');
        // $this->load->view('Pasien/pCetakSkl_view', $data);
    }

    public function ambilTranskrip()
    {
        $data['ambil'] = $this->Pasien_model->insertTranskrip();
        $data['antrian'] = $this->Pasien_model->cetakTranskrip();
        header('location:'.site_url().'Pasien/Antrian');
        // $this->load->view('Pasien/pCetakTrans_view', $data);
    }

    public function cetakSkl()
    {
        // $data['ambil'] = $this->Pasien_model->cetakSkl();
        $data['antrian'] = $this->Pasien_model->cetakSkl();
        $this->load->view('Pasien/pCetakSkl_view', $data);
    }

    public function cetakKhs()
    {
        // $data['ambil'] = $this->Pasien_model->cetakSkl();
        $data['antrian'] = $this->Pasien_model->cetakKhs();
        $this->load->view('Pasien/pCetakKhs_view', $data);
    }

    public function cetakTrans()
    {
        // $data['ambil'] = $this->Pasien_model->cetakSkl();
        $data['antrian'] = $this->Pasien_model->cetakTrans();
        $this->load->view('Pasien/pCetakTrans_view', $data);
    }



    public function printSkl()
    {
        $data['antrian'] = $this->Pasien_model->cetakSkl();
        ob_start();
        $this->load->view('Pasien/printSkl', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/plugin/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('Antrian Anda.pdf', 'D');
    }

    public function printKhs()
    {
        $data['antrian'] = $this->Pasien_model->cetakSkl();
        ob_start();
        $this->load->view('Pasien/printKhs', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/plugin/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('Antrian Anda.pdf', 'D');
    }

    public function printTrans()
    {
        $data['antrian'] = $this->Pasien_model->cetakSkl();
        ob_start();
        $this->load->view('Pasien/printTrans', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/plugin/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('Antrian Anda.pdf', 'D');
    }

    public function printGigi()
    {
        $data['antrian'] = $this->Pasien_model->cetakGigi();
        ob_start();
        $this->load->view('Pasien/pPrintGigi', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/plugin/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('Antrian Anda.pdf', 'D');
    }
}
