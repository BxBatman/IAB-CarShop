<?php
defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Cars extends CI_Controller
{

    public function getCarData(){
        $data = $this->db->query("SELECT * FROM auto");
        $data_query = $data->result_array();
        return $data_query;
    }
    public function index()
    {
        $data_query = $this->getCarData();
        $this->load->view('header');
        $this->load->view('cars', ['carData' => $data_query]);
    }

    public function addCar()
    {
        $serialNumber = $this->input->post('serialNumber');
        $make = $this->input->post('make');
        $model = $this->input->post('model');
        $color = $this->input->post('color');
        $year = $this->input->post('year');
        if ($serialNumber != null) {
            $data = array(
                'numerSeryjny' => $serialNumber,
                'marka' => $make,
                'model' => $model,
                'kolor' => $color,
                'rok' => $year
            );
            $this->db->insert('auto', $data);
            if ($this->db->affected_rows() > 0) {
                $success = array(
                    'success' => 'Dodano auto'
                );
                $this->load->view('header');
                $data_query = $this->getCarData();

                $this->load->view('cars', ['carData' => $data_query, 'success' => $success]);
            } else {
                $error = array(
                    'error' => 'Wystąpił błąd podczas dodania'
                );
                $this->load->view('header');
                $data_query = $this->getCarData();
                $this->load->view('cars', ['carData' => $data_query, 'error' => $error]);
            }
        } else {
            $data_query = $this->getCarData();
            $this->load->view('header');
            $this->load->view('cars', ['carData' => $data_query]);
        }
    }

    public function removeCar()
    {
        $id = $this->input->post('id');
        $this->db->query("SELECT * FROM faktura where idAuto =" . $id);

        if ($this->db->affected_rows() > 0) {
            $error = array(
                'error' => 'Nie można usunąć auta z którym związane są faktury'
            );
            $data_query = $this->getCarData();
            $this->load->view('header');
            $this->load->view('cars', ['carData' => $data_query, 'error' => $error]);
        } else {

            $this->db->delete('auto', array('idAuto' => $id));
            if ($this->db->affected_rows() > 0) {
                $success = array(
                    'success' => 'Usunięto auto'
                );
                $this->load->view('header');
                $data_query = $this->getCarData();
                $this->load->view('cars', ['carData' => $data_query, 'success' => $success]);
            } else {
                $error = array(
                    'error' => 'Wystąpił błąd podczas usuniecia lub auto o takim id nie istnieje'
                );
                $data_query = $this->getCarData();
                $this->load->view('header');
                $this->load->view('cars', ['carData' => $data_query, 'error' => $error]);
            }
        }
    }


}
