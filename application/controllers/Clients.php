<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Clients extends CI_Controller
{
    public function getClientData(){
        $data = $this->db->query("SELECT * FROM klient");
        $data_query = $data->result_array();

        return $data_query;
    }
    public function index()
    {    $data_query = $this->getClientData();
        $this->load->view('header');
        $this->load->view('clients',['clientData'=>$data_query]);
    }

    public function addClient()
    {
        $surname = $this->input->post('surname');
        $name = $this->input->post('name');
        $phoneNumber = $this->input->post('phoneNumber');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $postcode = $this->input->post('postcode');
        $nip = $this->input->post('nip');

        if ($surname != null) {
            $data = array(
                "nazwiskoK" => $surname,
                "imieK" => $name,
                "numerTelefonu" => $phoneNumber,
                "adres" => $address,
                "miasto" => $city,
                "kodPocztowy" => $postcode,
                "nip" => $nip
            );
            $this->db->insert('klient', $data);
            if ($this->db->affected_rows() > 0) {
                $success = array(
                    'success' => 'Dodano klienta'
                );
                $this->load->view('header');
                $data_query = $this->getClientData();
                $this->load->view('clients', ['clientData'=>$data_query,'success' => $success]);
            } else {
                $error = array(
                    'error' => 'Wystąpił błąd podczas dodania'
                );
                $this->load->view('header');
                $this->load->view('clients', $error);
            }
        }else {
            $data_query = $this->getClientData();
            $this->load->view('header');
            $this->load->view('clients',['clientData'=>$data_query]);
        }
    }

    public function removeClient(){
        $id = $this->input->post('id');
        $this->db->query("SELECT * FROM faktura where idKlient =" . $id);

        if ($this->db->affected_rows() > 0) {
            $error = array(
                'error' => 'Nie można usunąć klienta z którym związane są faktury'
            );
            $data_query = $this->getClientData();
            $this->load->view('header');
            $this->load->view('clients', ['clientData' => $data_query, 'error' => $error]);
        } else {

            $this->db->delete('klient', array('idKlient' => $id));
            if ($this->db->affected_rows() > 0) {
                $success = array(
                    'success' => 'Usunięto klienta'
                );
                $this->load->view('header');
                $data_query = $this->getClientData();
                $this->load->view('clients', ['clientData' => $data_query, 'success' => $success]);
            } else {
                $error = array(
                    'error' => 'Wystąpił błąd podczas usuniecia lub klient o takim id nie istnieje'
                );
                $data_query = $this->getClientData();
                $this->load->view('header');
                $this->load->view('clients', ['clientData' => $data_query, 'error' => $error]);
            }
        }
    }


}
