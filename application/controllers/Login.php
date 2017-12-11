<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }

    public function show()
    {

        $code = $this->input->post('code');
        $query = $this->db->query("SELECT * FROM sprzedawca");
        $status = "";
        foreach ($query->result() as $row) {
            if (password_verify($code,$row->pass)) {
                $_SESSION['imie'] = $row->imie;
                $_SESSION['nazwisko'] = $row->nazwisko;
                $status = "exist";
            }

        }
        if ($status == "exist") {
            redirect('home/index');
        } else {
            $data = array(
                'error_message' => 'Podano zły klucz'
            );

            $this->load->view('login', $data);
        }
    }
    public function logout(){
        unset($_SESSION['imie']);
        unset($_SESSION['nazwisko']);
        $this->load->view('login');
    }
}
