<?php
defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin');
    }

    public function getSellerData()
    {
        $data = $this->db->query('SELECT * FROM sprzedawca');
        $data_query = $data->result_array();
        return $data_query;
    }

    public function loadAddIndex()
    {
        $code = $this->input->post('code');
        $data = $this->db->query('SELECT * FROM sprzedawca where idSprzedawca = 1');
        foreach ($data->result() as $row) {
            if (password_verify($code, $row->pass)) {
                $_SESSION['admin'] = "set";
                $data = $this->getSellerData();
                $this->load->view('adddeleteadmin',['sellerData'=>$data]);
            } else {
                $data = array(
                    'error_message' => 'Podano zły klucz'
                );

                $this->load->view('admin', $data);
            }
        }


    }
    public function addSeller(){
        $surname = $this->input->post('surname');
        $name = $this->input->post('name');
        $pass = $this->input->post('pass');
        $hashedPass = password_hash($pass,PASSWORD_DEFAULT);
        $data = array(
            "nazwisko" => $surname,
            "imie" => $name,
            "pass" => $hashedPass
        );
        $this->db->insert('sprzedawca',$data);
        $data = $this->getSellerData();
        $this->load->view('adddeleteadmin',['sellerData'=>$data]);
    }

    public function deleteSeller(){
        $id= $this->input->post('id');
        $this->db->delete('sprzedawca', array('idSprzedawca' => $id));
        if ($this->db->affected_rows() > 0) {
            $success = array(
                'success' => 'Usunięto sprzedawce'
            );
            $data = $this->getSellerData();
            $this->load->view('adddeleteadmin',['success'=>$success,'sellerData'=>$data]);
        } else {
            $error = array(
                'error' => 'Wystąpił błąd podczas usuniecia lub sprzedawca o takim id nie istnieje'
            );
            $data = $this->getSellerData();
            $this->load->view('adddeleteadmin',['error'=>$error,'sellerData'=>$data]);
        }
    }
}