<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 25/07/2017
 * Time: 12:29
 */

class karyawan extends CI_Controller
{
    public function index()
    {
        $this->load->view('karyawan');
    }

    public function profile()
    {
        $this->load->model('karyawan_model');
        $data = $this->karyawan_model->getProfile();

        $perubahan = $this->karyawan_model->getPerubahan();

        $this->load->view('profile', array('data' => $data, 'perubahan' => $perubahan));
    }

    public function edit()
    {
        $this->load->model("karyawan_model");
        $perubahan = $this->karyawan_model->getPerubahan();
        $data = $this->karyawan_model->getProfile();

        foreach ($perubahan as $p)

        if($p['status'] == "Menunggu")
        {
            redirect(base_url(). "karyawan/profile");
        }

        $this->load->view('edit', array('data' => $data));
    }

    public function add_sakit()
    {


    }

    public function add_izin()
    {
        $this->load->model('karyawan_model');
        $id = $this->karyawan_model->getProfile();
        foreach ($id as $id);

        $tanggal_pengajuan = $this->input->post('tanggal_pengajuan');
        $jenis_izin = $this->input->post('jenis_izin');
        $tanggal_izin = $this->input->post('tanggal_izin');
        $jumlah_hari_izin = $this->input->post('jumlah_hari');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'id_karyawan'=> $id['idkaryawan'],
            'tanggal_pengajuan'=>$tanggal_pengajuan,
            'tanggal_izin'=>$tanggal_izin,
            'jumlah_hari'=>$jumlah_hari_izin,
            'jenis'=>$jenis_izin,
            'keterangan'=> $keterangan,
            'status'=> "Pending"
        );

        $this->db->insert('izin', $data);
        redirect(base_url()."karyawan/izin");
    }

    public function tim()
    {
        $this->load->view('tim');
    }

    public function cuti()
    {
        $this->load->view('cuti');
    }

    public function slip_gaji()
    {
        $this->load->view('slip_gaji');
    }

    public function sakit()
    {
        $this->load->model('karyawan_model');
        $id = $this->karyawan_model->getProfile();
        foreach ($id as $id);
        $id_karyawan = $id['idkaryawan'];

        $status = $this->karyawan_model->countStatusSakit($id_karyawan);
        $data = $this->karyawan_model->getSakit($id_karyawan);

        $this->load->view('sakit',  array('data' => $data, 'status' => $status));
    }

    public function batal_sakit($id)
    {
        $where = array('id_sakit' => $id);
        $update_array = array(
            'status' => "Batal"
        );
        $update_data = $this->db->update('sakit', $update_array, $where);
        if($update_data != null)
        {
            redirect(base_url().'karyawan/sakit');
        }
    }

    public function izin()
    {
        $this->load->model('karyawan_model');
        $id = $this->karyawan_model->getProfile();
        foreach ($id as $id);
        $id_karyawan = $id['idkaryawan'];

        $status = $this->karyawan_model->countStatusIzin($id_karyawan);
        $data = $this->karyawan_model->getIzin($id_karyawan);

        $this->load->view('izin_lainnya', array('data' => $data, 'status' => $status));
    }

    public function batal_izin($id)
    {
        $where = array('id_izin' => $id);
        $update_array = array(
            'status' => "Batal"
        );
        $update_data = $this->db->update('izin', $update_array, $where);
        if($update_data != null)
        {
            redirect(base_url().'karyawan/Izin');
        }
    }

    public function form_sakit()
    {
        $result = null;
        $this->load->model('karyawan_model');
        $id = $this->karyawan_model->getProfile();
        foreach ($id as $id);

        $tanggal_pengajuan = $this->input->post('tanggal_pengajuan');
        $tanggal_izin_sakit = $this->input->post('tanggal_izin');
        $jumlah_hari_sakit = $this->input->post('jumlah_hari');
        $keterangan = $this->input->post('keterangan');
        $surat_dokter = $this->input->post('surat_dokter');

        $data = array(
            'id_karyawan'=> $id['idkaryawan'],
            'tanggal_pengajuan'=>$tanggal_pengajuan,
            'tanggal_sakit'=>$tanggal_izin_sakit,
            'jumlah_hari'=>$jumlah_hari_sakit,
            'keterangan'=> $keterangan,
            'file'=> $surat_dokter,
            'status'=> "Pending"
        );

        $this->load->model('karyawan_model');
        $id = $this->karyawan_model->getProfile();
        foreach ($id as $id);
        $id_karyawan = $id['idkaryawan'];

        $status = $this->karyawan_model->countStatusSakit($id_karyawan);
        if(isset($_POST['submit']))
        {
            $insert = $this->db->insert('sakit', $data);
            if($insert != null)
            {
                $result = '<div class="alert alert-success" role="alert">Sukses Mengajukan Sakit, Pengajuan anda akan di proses <a href="sakit">kembali</a> </div>';
            }
        }


        $this->load->view('form_sakit', array('result' => $result, 'status' => $status));
    }

    public function form_izin()
    {
        $this->load->view('form_izin');
    }

    public function kata_sandi()
    {
        $result = null;
        $sandi_lama = $this->input->post('sandi_lama');
        $sandi_baru = $this->input->post('sandi_baru');
        $ulang_sandi = $this->input->post('ulang_sandi');

        $this->load->model("karyawan_model");
        $cek_password_lama = $this->karyawan_model->getProfile();

        if(!empty($_POST['submit']))
        {
            foreach ($cek_password_lama as $password_lama)
                if($sandi_lama == $password_lama['password'] && $sandi_baru == $ulang_sandi)
                {

                    $where = array('username' => $_SESSION['username']);
                    $update_array = array(
                        'password' => $sandi_baru
                    );
                    $update_password = $this->db->update('user', $update_array, $where);
                    if($update_password != null)
                    {
                        $result = '<div class="alert alert-success" role="alert">Sukses Mengubah Kata Sandi Anda</div>';
                    }
                }
                else if($sandi_lama != $password_lama['password'])
                {
                    $result = '<div class="alert alert-danger" role="alert">Kata Sandi lama tidak sesuai</div>';
                }
                else
                {
                    $result = '<div class="alert alert-danger" role="alert">Kata Sandi baru tidak sesuai dengan konfirmasi Kata sandi</div>';
                }
        }

        $this->load->view('kata_sandi', array('result' => $result));
    }

    public function kehadiran()
    {
        $this->load->view('kehadiran');
    }

    public function permohonan()
    {
        $this->load->view('permohonan');
    }

    public function pengumuman()
    {
        $like = null;
        $this->load->model("karyawan_model");
        if(isset($_POST['submit']))
        {
            $like =  $this->input->post('search');;
        }
        $data = $this->karyawan_model->getPengumuman($like);
        $this->load->view('pengumuman', array('data' => $data));
    }

    public function pesan_pengumuman($id)
    {
        $this->load->model("karyawan_model");
        $data = $this->karyawan_model->getDetailPengumuman($id);
        $this->load->view('detail', array('data' => $data));
    }

    public function kalendar()
    {
        $this->load->view('kalendar');
    }

    public function save()
    {
        $this->load->model('karyawan_model');
        $id = $this->karyawan_model->getProfile();
        foreach ($id as $id);

        $email = $this->input->post('email');
        $agama = $this->input->post('agama');
        $golongan_darah = $this->input->post('golongan_darah');
        $statusP_perkawinan = $this->input->post('status_perkawinan');
        $ktp = $this->input->post('ktp');
        $hp = $this->input->post('hp');

        $data = array(
            'id_karyawan'=> $id['idkaryawan'],
            'email'=>$email,
            'agama'=>$agama,
            'golongan_darah'=>$golongan_darah,
            'status_perkawinan'=>$statusP_perkawinan,
            'nomor_ktp'=>$ktp,
            'nomor_hp'=>$hp,
            'status'=> "Menunggu"
        );

        $this->db->insert('perubahan', $data);
        redirect(base_url()."karyawan/profile");
    }


    public function detail_sakit($id)
    {
        $this->load->model("karyawan_model");


        $data = $this->karyawan_model->getDetailSakit($id);

        $this->load->view("detail_sakit", array('data' => $data));
    }

    public function edit_sakit($id)
    {
        $result = null;
        $this->load->model("karyawan_model");
        $data = $this->karyawan_model->getDetailSakit($id);

        if(isset($_POST['submit']))
        {
            $tanggal_pengajuan = $this->input->post('tanggal_pengajuan');
            $tanggal_sakit = $this->input->post('tanggal_sakit');
            $jumlah_hari = $this->input->post('jumlah_hari');
            $keterangan = $this->input->post('keterangan');
            $surat_dokter = $this->input->post('surat_dokter');

            $where = array('id_sakit' => $id);
            $update_array = array(
                'tanggal_pengajuan' => $tanggal_pengajuan,
                'tanggal_sakit' => $tanggal_sakit,
                'jumlah_hari' => $jumlah_hari,
                'keterangan' => $keterangan,
                'file' => $surat_dokter
            );
            $update_izin = $this->db->update('sakit', $update_array, $where);
            if($update_izin != null)
            {
                $result = '<div class="alert alert-success" role="alert">Sukses Mengubah Pengajuan Sakit Anda</div>';
            }
        }

        $this->load->view("edit_sakit", array('data' => $data, 'result' => $result));

    }

    public function edit_izin($id)
    {
        $result = null;
        $this->load->model("karyawan_model");
        $data = $this->karyawan_model->getDetailIzin($id);

        if(isset($_POST['submit']))
        {
            $tanggal_pengajuan = $this->input->post('tanggal_pengajuan');
            $jenis_izin = $this->input->post('jenis_izin');
            $tanggal_izin = $this->input->post('tanggal_izin');
            $jumlah_hari_izin = $this->input->post('jumlah_hari');
            $keterangan = $this->input->post('keterangan');

            $where = array('id_izin' => $id);
            $update_array = array(
                'tanggal_pengajuan' => $tanggal_pengajuan,
                'jenis' => $jenis_izin,
                'tanggal_izin' => $tanggal_izin,
                'jumlah_hari' => $jumlah_hari_izin,
                'keterangan' => $keterangan
            );
            $update_izin = $this->db->update('izin', $update_array, $where);
            if($update_izin != null)
            {
                $result = '<div class="alert alert-success" role="alert">Sukses Mengubah Pengajuan Izin Anda</div>';
            }
        }

        $this->load->view("edit_izin", array('data' => $data, 'result' => $result));
    }

    public function detail_izin($id)
    {
        $this->load->model("karyawan_model");
        $data = $this->karyawan_model->getDetailIzin($id);

        $this->load->view("detail_izin", array('data' => $data));
    }

    function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url() . '');
    }
}