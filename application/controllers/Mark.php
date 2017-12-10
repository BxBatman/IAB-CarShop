<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Mark extends CI_Controller
{

    public function getMarks()
    {
        $data = $this->db->query('SELECT * FROM serwisMechanik JOIN mechanik ON mechanik.idMechanik = serwisMechanik.idMechanik  JOIN bilet on bilet.idBilet = serwismechanik.idBilet');
        $data_query = $data->result_array();
        return $data_query;
    }
    public function getTicketData(){
        $data = $this->db->query("SELECT * FROM bilet JOIN auto ON bilet.idAuto = auto.idAuto JOIN klient ON klient.idKlient = bilet.idKlient");
        $data_query = $data->result_array();
        return $data_query;
    }
    public function getMechanicData()
    {
        $data = $this->db->query('SELECT * FROM mechanik');
        $data_query = $data->result_array();
        return $data_query;
    }

    public function index()
    {
        $data_query = $this->getMarks();
        $dataTicket_query = $this->getTicketData();
        $dataMechanic_query = $this->getMechanicData();
        $this->load->view('header');
        $this->load->view('mark', ['markData' => $data_query,'ticketData'=>$dataTicket_query,'mechanicData'=>$dataMechanic_query]);

    }

    public function addMark()
    {
        $id = $this->input->post('id');
        $ticketID = $this->input->post('ticketID');
        $mark = $this->input->post('mark');
        $comment = $this->input->post('comment');
        $data = array(
            'idBilet' => $ticketID,
            'idMechanik' => $id,
            'ocena' => $mark,
            'komentarzM' => $comment

        );

        $this->db->insert('serwismechanik',$data);
        if($this->db->affected_rows() > 0) {
            $success = array(
                'success' => 'Dodano ocene'
            );
            $this->load->view('header');
            $data_query = $this->getMarks();
            $dataTicket_query = $this->getTicketData();
            $dataMechanic_query = $this->getMechanicData();
            $this->load->view('mark', ['markData' => $data_query, 'success' => $success,'ticketData'=>$dataTicket_query,'mechanicData'=>$dataMechanic_query]);
        } else {
            $error = array(
                'error' => 'Wystąpił błąd podczas dodania'
            );
            $this->load->view('header');
            $data_query = $this->getMarks();
            $dataTicket_query = $this->getTicketData();
            $dataMechanic_query = $this->getMechanicData();
            $this->load->view('mark', ['markData' => $data_query, 'error' => $error,'ticketData'=>$dataTicket_query,'mechanicData'=>$dataMechanic_query]);
        }

    }
    public function removeMark(){
        $id = $this->input->post('id');
        $this->db->delete('serwismechanik', array("idMechanik" => $id));
        if ($this->db->affected_rows() > 0) {
            $this->load->view('header');
            $success = array(
                'success' => 'Usunięto ocene'
            );
            $data_query = $this->getMarks();
            $dataTicket_query = $this->getTicketData();
            $dataMechanic_query = $this->getMechanicData();
            $this->load->view('mark', ['markData' => $data_query, 'success' => $success,'ticketData'=>$dataTicket_query,'mechanicData'=>$dataMechanic_query]);
        } else {
            $error = array(
                'error' => 'Wystąpił błąd podczas usuniecia lub mechanik o takim id nie istnieje'
            );
            $this->load->view('header');
            $data_query = $this->getMarks();
            $dataTicket_query = $this->getTicketData();
            $dataMechanic_query = $this->getMechanicData();
            $this->load->view('mark', ['markData' => $data_query, 'error' => $error,'ticketData'=>$dataTicket_query,'mechanicData'=>$dataMechanic_query]);
        }
    }
}