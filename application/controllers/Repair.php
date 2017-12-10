<?php
defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Repair extends CI_Controller
{
    public function getRepairData(){
        $data = $this->db->query("SELECT * FROM naprawaczesci");
        $data_query = $data->result_array();
        return $data_query;
    }

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

    public function getPartsData()
    {
        $data = $this->db->query("SELECT * FROM czesci");
        $data_query = $data->result_array();

        return $data_query;
    }

    public function index()
    {
        $data_query = $this->getPartsData();
        $ticketData_query = $this->getTicketData();
        $mechanicData_query = $this->getMechanicData();
        $repairData_query = $this->getRepairData();
        $this->load->view('header');
        $this->load->view('repair', ['partsData' => $data_query, 'ticketData' => $ticketData_query, 'mechanicData' => $mechanicData_query,'repairData'=>$repairData_query]);
    }

    public function addRepair()
    {
        $ticketID = $this->input->post('ticketID');
        $partID = $this->input->post('partID');
        $mechanicID = $this->input->post('mechanicID');
        $number = $this->input->post('number');
        $cost = $this->input->post('cost');
        $date1 = $this->input->post('date');
        $date = date('y/m/d', strtotime($date1));

        $this->db->query("SELECT * FROM bilet where idBilet =" . $ticketID);
        if ($this->db->affected_rows() > 0) {
            $this->db->query("SELECT * FROM czesci WHERE idCzesci =" . $partID);
            if ($this->db->affected_rows() > 0) {
                $data = array (
                    "idCzesci" => $partID,
                    "idBilet" => $ticketID,
                    "iloscCzesci" =>$number,
                    "cena" => $cost
                );
                $data2 = array(
                  "dataZwrotu"=>$date
                );
                $this->db->insert('naprawaCzesci',$data);
                $this->db->update('bilet',$data2,"idBilet=".$ticketID);
                $success = array(
                        'success' => 'Dodano naprawe'
                    );
                $data_query = $this->getPartsData();
                $ticketData_query = $this->getTicketData();
                $mechanicData_query = $this->getMechanicData();
                $repairData_query = $this->getRepairData();
                $this->load->view('header');
                $this->load->view('repair', ['success' => $success,'repairData'=>$repairData_query, 'partsData' => $data_query, 'ticketData' => $ticketData_query, 'mechanicData' => $mechanicData_query]);


        } else {
            $error = array(
                'error' => 'Czesc o podanym ID nie istnieje'
            );
            $data_query = $this->getPartsData();
            $ticketData_query = $this->getTicketData();
            $mechanicData_query = $this->getMechanicData();
            $repairData_query = $this->getRepairData();
            $this->load->view('header');
            $this->load->view('repair', ['error' => $error,'repairData'=>$repairData_query, 'partsData' => $data_query, 'ticketData' => $ticketData_query, 'mechanicData' => $mechanicData_query]);
        }
    }


}


}