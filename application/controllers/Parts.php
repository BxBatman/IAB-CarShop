<?php
defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Parts extends CI_Controller{

    public function getPartsData(){
        $data = $this->db->query("SELECT * FROM czesci");
        $data_query = $data->result_array();

       return $data_query;
    }
    public function index(){
        $data_query = $this->getPartsData();
        $this->load->view('header');
        $this->load->view('parts',['partsData'=>$data_query]);
    }

    public function addPart(){
        $partNumber = $this->input->post('partNumber');
        $description = $this->input->post('description');
        $hurtPrice = $this->input->post('hurtPrice');
        $fullPrice = $this->input->post('fullPrice');

        if($partNumber != null){
            $data = array(
                'numerCzesci' => $partNumber,
                'opis' => $description,
                'cenaZakupu' => $hurtPrice,
                'cenaDetaliczna' => $fullPrice
            );
            $this->db->insert('czesci',$data);
            if($this->db->affected_rows() > 0){
                $success = array(
                    'success' => 'Dodano auto'
                );
                $this->load->view('header');
                $data_query = $this->getPartsData();

                $this->load->view('parts', ['partsData' => $data_query, 'success' => $success]);
            }
        }
    }

    public function removePart(){
        $id = $this->input->post('id');
        $this->db->delete('czesci',array('idCzesci'=>$id));
        if ($this->db->affected_rows() > 0) {
            $success = array(
                'success' => 'Usunięto część'
            );
            $this->load->view('header');
            $data_query = $this->getPartsData();
            $this->load->view('parts', ['partsData' => $data_query, 'success' => $success]);
        }else {
            $error = array(
                'error' => 'Wystąpił błąd podczas usuniecia lub część o takim id nie istnieje'
            );
            $data_query = $this->getPartsData();
            $this->load->view('header');
            $this->load->view('parts', ['partsData' => $data_query, 'error' => $error]);
        }

    }


}