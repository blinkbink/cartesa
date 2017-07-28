<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 27/07/2017
 * Time: 11:12
 */

class karyawan_model extends CI_Model
{
    public function getProfile()
    {
        if(isset($_SESSION['username']) != null)
        {
            $this->db->select('*');
            $this->db->from('karyawan a');
            $this->db->join('user b', 'b.id_karyawan = a.idkaryawan', 'left');
            $this->db->where('b.username', $_SESSION['username']);
            $query = $this->db->get();
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
    }

    public function getPerubahan()
    {
        if(isset($_SESSION['username']) != null)
        {
            $this->db->select('*');
            $this->db->from('user a');
            $this->db->join('perubahan b', 'b.id_karyawan = a.id_karyawan', 'left');
            $this->db->where('a.username', $_SESSION['username']);
            $this->db->order_by("idperubahan", "DESC");
            $this->db->limit(1);
            $query = $this->db->get();
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
    }

    public function getSakit($id_karyawan)
    {
        if(isset($_SESSION['username']) != null)
        {
            $this->db->select('*');
            $this->db->from('sakit a');
            $this->db->join('karyawan b', 'a.id_karyawan = b.idkaryawan', 'left');
            $this->db->where('a.id_karyawan', $id_karyawan);
            $this->db->order_by("status", "DESC");

            $query = $this->db->get();
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
    }

    public function getDetailSakit($id)
    {
        if(isset($_SESSION['username']) != null)
        {
            $this->db->select('*');
            $this->db->from('sakit a');
            $this->db->join('karyawan b', 'a.id_karyawan = b.idkaryawan', 'left');
            $this->db->where('a.id_sakit', $id);

            $query = $this->db->get();
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
    }

    public function getDetailIzin($id)
    {
        if(isset($_SESSION['username']) != null)
        {
            $this->db->select('*');
            $this->db->from('izin a');
            $this->db->join('karyawan b', 'a.id_karyawan = b.idkaryawan', 'left');
            $this->db->where('a.id_izin', $id);

            $query = $this->db->get();
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
    }

    public function countStatusSakit($id_karyawan)
    {
        if(isset($_SESSION['username']) != null)
        {
            $this->db->select('count(status) as total');
            $this->db->from('sakit a');
            $this->db->join('karyawan b', 'a.id_karyawan = b.idkaryawan', 'left');
            $this->db->where('a.id_karyawan', $id_karyawan);
            $this->db->where('status', "Pending");

            $query = $this->db->get();
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
    }

    public function getIzin($id_karyawan)
    {
        if(isset($_SESSION['username']) != null)
        {
            $this->db->select('*');
            $this->db->from('izin a');
            $this->db->join('karyawan b', 'a.id_karyawan = b.idkaryawan', 'left');
            $this->db->where('a.id_karyawan', $id_karyawan);
            $this->db->order_by("status", "DESC");

            $query = $this->db->get();
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
    }

    public function countStatusIzin($id_karyawan)
    {
        if(isset($_SESSION['username']) != null)
        {
            $this->db->select('count(status) as total');
            $this->db->from('izin a');
            $this->db->join('karyawan b', 'a.id_karyawan = b.idkaryawan', 'left');
            $this->db->where('a.id_karyawan', $id_karyawan);
            $this->db->where('status', "Pending");

            $query = $this->db->get();
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
    }



    public function getPengumuman($like)
    {
        if(isset($_SESSION['username']) != null)
        {
            $this->db->select('*');
            $this->db->from('pengumuman a');
            $this->db->like('judul', $like);
            $query = $this->db->get();
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
    }

    public function getDetailPengumuman($id)
    {
        if(isset($_SESSION['username']) != null)
        {
            $this->db->select('*');
            $this->db->from('pengumuman');
            $this->db->where('idpengumuman', $id);
            $query = $this->db->get();
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
    }


}

?>