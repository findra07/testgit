<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data['pesan'] = $this->db->query("SELECT * FROM pesan")->result();
        $this->load->view('contact', $data);
    }

    public function pesan()
    {
        $email = $this->input->post('email');
        $msg = $this->input->post('msg');

        $pesan = array(
            'email' => $email,
            'message' => $msg
        );

        $inputpesan = $this->db->insert('pesan', $pesan);
        redirect('Contact');
    }
}

/* End of file Contact.php */
