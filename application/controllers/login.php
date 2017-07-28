<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 25/07/2017
 * Time: 12:37
 */

class login extends CI_Controller
{
    public function index()
    {
        $this->load->view("karyawan");
    }

    public function validasi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('login_model');

            if($this->login_model->integrity_login($username, $password))
            {
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);

                redirect(base_url() . 'karyawan');
            }
            else
            {
                $this->session->set_flashdata('error', 'invalid username or password');
                redirect(base_url() . '');
            }
        }
        else
        {
            $this->session->set_flashdata('error', 'input your username/password');
            echo "Salah";
            redirect(base_url() . '');
        }
    }
}