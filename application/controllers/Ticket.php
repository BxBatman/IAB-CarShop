<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Ticket extends CI_Controller
{

    public function getDataClient()
    {
        $data = $this->db->query("SELECT * FROM klient");
        $data_query = $data->result_array();
        return $data_query;
    }

    public function getDataCar()
    {
        $data = $this->db->query("SELECT * FROM auto");
        $data_query = $data->result_array();
        return $data_query;
    }

    public function getTicketData()
    {
        $data = $this->db->query("SELECT * FROM bilet JOIN auto ON bilet.idAuto = auto.idAuto JOIN klient ON klient.idKlient = bilet.idKlient");
        $data_query = $data->result_array();
        return $data_query;
    }

    public function index()
    {
        $data_query = $this->getTicketData();
        $dataCar_query = $this->getDataCar();
        $dataClient_query = $this->getDataClient();
        $this->load->view('header');
        $this->load->view('ticket', ['ticketData' => $data_query, 'clientData' => $dataClient_query, 'carData' => $dataCar_query]);
    }

    public function addTicket()
    {
        $ticketNumber = $this->input->post('ticketNumber');
        $carID = $this->input->post('carID');
        $clientID = $this->input->post('clientID');
        $comment = $this->input->post('comment');
        $date1 = $this->input->post('date1');
        $date = date('y/m/d', strtotime($date1));


            $this->db->query("SELECT * FROM auto where idAuto=" . $carID);
            if ($this->db->affected_rows() > 0) {
                $this->db->query("SELECT * FROM klient where idKlient=" . $clientID);
                if ($this->db->affected_rows() > 0) {
                        $data = array(
                            "numerBiletu" => $ticketNumber,
                            "idAuto" => $carID,
                            "idKlient" => $clientID,
                            "dataOtrzymania"=> $date,
                            "komentarz" => $comment,

                        );
                        $this->db->insert('bilet', $data);
                        if ($this->db->affected_rows() > 0) {
                            $success = array(
                                'success' => 'Dodano bilet'
                            );
                            $data_query = $this->getTicketData();
                            $dataCar_query = $this->getDataCar();
                            $dataClient_query = $this->getDataClient();
                            $this->load->view('header');
                            $this->load->view('ticket', ['success' => $success, 'ticketData' => $data_query, 'carData' => $dataCar_query, 'clientData' => $dataClient_query]);
                        } else {
                            $error = array(
                                'error' => 'Błąd przy dodawaniu biletu'
                            );
                            $data_query = $this->getTicketData();
                            $dataCar_query = $this->getDataCar();
                            $dataClient_query = $this->getDataClient();
                            $this->load->view('header');
                            $this->load->view('ticket', ['error' => $error, 'ticketData' => $data_query, 'carData' => $dataCar_query, 'clientData' => $dataClient_query]);
                        }

                } else {
                    $error = array(
                        'error' => 'Klient o podanym ID nie istnieje'
                    );
                    $data_query = $this->getTicketData();
                    $dataCar_query = $this->getDataCar();
                    $dataClient_query = $this->getDataClient();
                    $this->load->view('header');
                    $this->load->view('ticket', ['error' => $error, 'ticketData' => $data_query, 'carData' => $dataCar_query, 'clientData' => $dataClient_query]);
                }

            } else {
                $error = array(
                    'error' => 'Auto o podanym ID nie istnieje'
                );
                $data_query = $this->getTicketData();
                $dataCar_query = $this->getDataCar();
                $dataClient_query = $this->getDataClient();
                $this->load->view('header');
                $this->load->view('invoices', ['error' => $error, 'ticketData' => $data_query, 'carData' => $dataCar_query, 'clientData' => $dataClient_query]);
            }

        }


    public function removeTicket(){
        $id = $this->input->post('id');


            $this->db->delete('bilet', array('idBilet' => $id));
            if ($this->db->affected_rows() > 0) {
                $success = array(
                    'success' => 'Usunięto bilet'
                );
                $this->load->view('header');
                $data_query = $this->getTicketData();
                $dataCar_query = $this->getDataCar();
                $dataClient_query = $this->getDataClient();
                $this->load->view('ticket', ['carData' => $dataCar_query, 'success' => $success,'clientData'=>$dataClient_query,'ticketData'=>$data_query]);
            } else {
                $error = array(
                    'error' => 'Wystąpił błąd podczas usuniecia lub bilet o takim id nie istnieje'
                );
                $data_query = $this->getTicketData();
                $dataCar_query = $this->getDataCar();
                $dataClient_query = $this->getDataClient();
                $this->load->view('header');
                $this->load->view('ticket', ['carData' => $dataCar_query, 'error' => $error,'clientData'=>$dataClient_query,'ticketData'=>$data_query]);
            }

    }
}