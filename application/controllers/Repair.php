<?php
defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Repair extends CI_Controller{

    public function getMechanicData()
    {
        $data = $this->db->query("SELECT * FROM mechanik");
        $data_query = $data->result_array();
        return $data_query;
    }

    public function getTicketData()
    {
        $data = $this->db->query("SELECT * FROM bilet JOIN auto ON bilet.idAuto = auto.idAuto JOIN klient ON klient.idKlient = bilet.idKlient");
        $data_query = $data->result_array();
        return $data_query;
    }

    public function getPartsData(){
        $data = $this->db->query("SELECT * FROM czesci");
        $data_query = $data->result_array();

        return $data_query;
    }
    public function index(){
        $data_query = $this->getPartsData();
        $ticketData_query = $this->getTicketData();
        $mechanicData_query = $this->getMechanicData();
        $this->load->view('header');
        $this->load->view('repair',['partsData'=>$data_query,'ticketData'=> $ticketData_query,'mechanicData'=>$mechanicData_query]);
    }

    public function  addRepair(){
        $ticketID = $this->input->post('ticketID');
        $partID = $this->input->post('partID');
        $number = $this->input->post('number');
        $cost = $this->input->post('cost');
        $date1 = $this->input->post('date');
        $date = date('m/d/y', strtotime($date1));

    }


}