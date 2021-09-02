<?php
class Pasien_model extends CI_Model
{
    public function getRiwayat()
    {
        // $id_user = $this->session->userdata['logged_in']['id_user'];
        $nim = $this->session->userdata("nim"); // dapatkan id user yg login
        $this->db->select('*');
        $this->db->from('antri');
        $this->db->where('nim', $nim);
        $query = $this->db->get("");
        return $query;
    }

    public function getUmum()
    {
        $query = "SELECT tb_periksa.no_antrian FROM tb_periksa, tb_poli WHERE tb_poli.id_poli=tb_periksa.id_poli AND tb_periksa.id_status_periksa=3 AND tb_periksa.id_poli=1 AND tb_periksa.tanggal=CURRENT_DATE() GROUP BY tb_periksa.id_periksa";
        return $this->db->query($query);
    } 

    public function getKhs()
    {
        $nim = $this->session->userdata("nim"); 
        $query = "SELECT no_antri,status FROM antri where nim = '$nim' and hal = 'khs'";
        return $this->db->query($query);
    }

    public function getSkl()
    {
        $nim = $this->session->userdata("nim"); 
        $query = "SELECT no_antri,status FROM antri where nim = '$nim' and hal = 'skl'";
        return $this->db->query($query);
    }

    public function getTrans()
    {
        $nim = $this->session->userdata("nim"); 
        $query = "SELECT no_antri,status FROM antri WHERE nim = '$nim' and hal = 'Transkrip'";
        return $this->db->query($query);
    }

    public function getJUmum()
    {
        $query = "SELECT COUNT(tb_periksa.id_user) AS jumlah_au FROM tb_periksa WHERE id_poli = 1 AND id_status_periksa = 1 AND tanggal = CURRENT_DATE()";
        return $this->db->query($query);
    }

    public function getJGigi()
    {
        $query = "SELECT COUNT(tb_periksa.id_user) AS jumlah_ag FROM tb_periksa WHERE id_poli = 2 AND id_status_periksa = 1 AND tanggal = CURRENT_DATE()";
        return $this->db->query($query);
    }

    public function getJKhs()
    {
        $prodi = $this->session->userdata("prodi");
        $query = "SELECT COUNT(*) AS akhs FROM antri WHERE aprodi = '$prodi' and hal = 'khs' AND status = 0 AND tanggal = CURRENT_DATE()";
        // echo "khs ".$query;
        return $this->db->query($query);
    }

    public function getJSkl()
    {
        $prodi = $this->session->userdata("prodi");
        $query = "SELECT COUNT(*) AS askl FROM antri WHERE aprodi = '$prodi' and hal = 'skl' AND status = 0 AND tanggal = CURRENT_DATE()";
        // echo "jumlah ".$query;
        return $this->db->query($query);
    }

    public function getJTrans()
    {
        $prodi = $this->session->userdata("prodi");
        $query = "SELECT COUNT(*) AS atrans FROM antri WHERE aprodi = '$prodi' and hal = 'transkrip' AND status = 0 AND tanggal = CURRENT_DATE()";
        return $this->db->query($query);
    }

    public function tambahUmum()
    {
        $tanggal = date('Y-m-d');
        $this->db->select("COUNT(no_antrian) AS antrianUmum");
        $this->db->where('tanggal', $tanggal);
        $this->db->where('id_poli', 1);
        $query = $this->db->get('tb_periksa');
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $noUmum = intval($data->antrianUmum) + 1;
        } else {
            $noUmum = 1;  //cek jika kode belum terdapat pada table
        }
        return $noUmum;
        $data = $this->db->get();
        if ($data->num_rows() <> 0) {
            return $data->result_array();
        } else {
            return false;
        }
    }

    public function insertUmum()
    {
        $id_user = $this->session->userdata("session_id");
        $tanggal = date("Y-m-d");
        $antrian = $this->tambahUmum();
        $query = "INSERT INTO tb_periksa(id_periksa, id_user, id_poli, tanggal, no_antrian, id_status_periksa, id_status_obat) VALUES ('', '$id_user', '1', '$tanggal', '$antrian', '1','1')";
        
		return $this->db->query($query);
    }

    public function insertKHS()
    {
        $nim = $this->session->userdata("nim");
        $nama = $this->session->userdata("nama");
        $prodi = $this->session->userdata("prodi");
        $tanggal = date("Y-m-d");
        $query = "SELECT max(no_antri) as no from antri where hal = 'khs' and aprodi = '$prodi'";
        $hasil = $this->db->query($query)->result_array();
        if (!is_null($hasil[0]["no"])) {
            $no_antri = $hasil[0]['no']+1;
        } else {
            $no_antri = 1;
        }
        $query = "INSERT INTO antri(no_antri, anama, aprodi, tanggal, hal, status, nim) VALUES ($no_antri, '$nama', '$prodi', '$tanggal', 'KHS', 0 ,'$nim')";
        // return $no_antri;
        return $this->db->query($query);

    }

    public function insertSKL()
    {
         $nim = $this->session->userdata("nim");
        $nama = $this->session->userdata("nama");
        $prodi = $this->session->userdata("prodi");
        $tanggal = date("Y-m-d");
        $query = "SELECT max(no_antri) as no from antri where hal = 'Skl' and aprodi = '$prodi'";
        $hasil = $this->db->query($query)->result_array();
        
        if (!is_null($hasil[0]["no"])) {
            $no_antri = $hasil[0]['no']+1;
        } else {
            $no_antri = 1;
        }
        $query = "INSERT INTO antri(no_antri, anama, aprodi, tanggal, hal, status, nim) VALUES ($no_antri, '$nama', '$prodi', '$tanggal', 'SKL', 0 ,'$nim')";
        // echo $query;
        return $this->db->query($query);
    }

    public function insertTranskrip()
    {
        $nim = $this->session->userdata("nim");
        $nama = $this->session->userdata("nama");
        $prodi = $this->session->userdata("prodi");
        $tanggal = date("Y-m-d");
        $query = "SELECT max(no_antri) as no from antri where hal = 'transkrip' and aprodi = '$prodi'";
        $hasil = $this->db->query($query)->result_array();
         if (!is_null($hasil[0]["no"])) {
            $no_antri = $hasil[0]['no']+1;
        } else {
            $no_antri = 1;
        }
        $query = "INSERT INTO antri(no_antri, anama, aprodi, tanggal, hal, status, nim) VALUES ($no_antri, '$nama', '$prodi', '$tanggal', 'Transkrip', 0 ,'$nim')";
        return $this->db->query($query);
    }

    public function cetakUmum()
    {
        $id_user = $this->session->userdata("session_id");
        $query = "SELECT MAX(no_antrian) as umum from tb_periksa where tanggal = CURRENT_DATE() and id_user = '$id_user' and id_poli = 1";
        return $this->db->query($query)->result();
    }

    public function cetak()
    {
        $nim = $this->session->userdata("nim");
        $query = "SELECT MAX(no_antri) as umum from antri where tanggal = CURRENT_DATE() and nim = '$nim' and hal = 'Transkip'";
        return $this->db->query($query)->result();
    }

    public function tambahGigi()
    {
        $tanggal = date('Y-m-d');
        $this->db->select("COUNT(no_antrian) AS antrianGigi");
        $this->db->where('tanggal', $tanggal);
        $this->db->where('id_poli', 2);
        $query = $this->db->get('tb_periksa');
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $noGigi = intval($data->antrianGigi) + 1;
        } else {
            $noGigi = 1;  //cek jika kode belum terdapat pada table
        }
        return $noGigi;
        $data = $this->db->get();
        if ($data->num_rows() <> 0) {
            return $data->result_array();
        } else {
            return false;
        }
    }

    public function insertGigi()
    {
        $id_user = $this->session->userdata("session_id");
        $tanggal = date("Y-m-d");
        $antrian = $this->tambahGigi();
        $query = "INSERT INTO tb_periksa(id_periksa, id_user, id_poli, tanggal, no_antrian, id_status_periksa, id_status_obat) VALUES ('', '$id_user', '2', '$tanggal', '$antrian', '1','1')";
        return $this->db->query($query);
    }

    public function cetakKhs()
    {
        $nim = $this->session->userdata("nim");
        $query = "SELECT MAX(no_antri) as khs from antri where tanggal = CURRENT_DATE() and nim = '$nim' and hal = 'khs' ";
        return $this->db->query($query)->result();
    }

     public function cetakSkl()
    {
        $nim = $this->session->userdata("nim");
        $query = "SELECT no_antri as skl from antri where nim = '$nim' and hal = 'skl'";
        return $this->db->query($query)->result();
    }

     public function cetakTranskrip()
    {
        $nim = $this->session->userdata("nim");
        $query = "SELECT MAX(no_antri) as trans from antri where tanggal = CURRENT_DATE() and nim = '$nim' and hal = 'transkrip'";
        return $this->db->query($query)->result();
    }

    public function selesaiUmum()
    {
        $query = "SELECT COUNT(no_antrian) as sUmum from tb_periksa where tanggal = CURRENT_DATE() and id_status_periksa=2 and id_poli = 1";
        return $this->db->query($query);
    }

    public function selesaiGigi()
    {
        $query = "SELECT COUNT(no_antrian) as sGigi from tb_periksa where tanggal = CURRENT_DATE() and id_status_periksa=2 and id_poli = 2";
        return $this->db->query($query);
    }
}
