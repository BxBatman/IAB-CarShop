<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Ticket extends CI_Controller
{
    public function getTicketData()
    {
        $data = $this->db->query("SELECT * FROM bilet");
        $data_query = $data->result_array();
        return $data_query;
    }

    public function index()
    {
        $data_query = $this->getTicketData();
        $this->load->view('header');
        $this->load->view('ticket', ['ticketData' => $data_query]);
    }





}