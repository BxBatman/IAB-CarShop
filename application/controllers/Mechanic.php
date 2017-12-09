<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Mechanic extends CI_Controller
{

    public function index()
    {
        $data_query = $this->getMechanicData();
        $this->load->view('header');
        $this->load->view('mechanic', ['mechanicData' => $data_query]);
    }

    public function getMechanicData()
    {
        $data = $this->db->query("SELECT * FROM mechanik");
        $data_query = $data->result_array();
        return $data_query;
    }

    public function addMechanic()
    {
        $surname = $this->input->post('surname');
        $name = $this->input->post('name');

            $data = array(
                'nazwisko' => $surname,
                'imie' => $name
            );

            $this->db->insert('mechanik', $data);

            if ($this->db->affected_rows() > 0) {
                $success = array(
                    'success' => 'Dodano mechanika'
                );
                $this->load->view('header');
                $data_query = $this->getMechanicData();
                $this->load->view('mechanic', ['mechanicData' => $data_query, 'success' => $success]);
            } else {
                $error = array(
                    'error' => 'Wystąpił błąd podczas dodania'
                );
                $this->load->view('header');
                $data_query = $this->getMechanicData();
                $this->load->view('mechanic', ['mechanicData' => $data_query, 'error' => $error]);
            }


    }

    public function removeMechanic()
    {
        $id = $this->input->post('id');
        $this->db->delete('mechanik', array("idMechanik" => $id));
        if ($this->db->affected_rows() > 0) {
            $this->load->view('header');
            $data_query = $this->getMechanicData();
            $success = array(
                'success' => 'Usunięto mechanika'
            );
            $this->load->view('mechanic', ['mechanicData' => $data_query, 'success' => $success]);
        } else {
            $error = array(
                'error' => 'Wystąpił błąd podczas usuniecia lub auto o takim id nie istnieje'
            );
            $this->load->view('header');
            $data_query = $this->getMechanicData();
            $this->load->view('mechanic', ['mechanicData' => $data_query, 'error' => $error]);
        }

    }

}