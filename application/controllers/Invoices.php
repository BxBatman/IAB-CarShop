<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Invoices extends CI_Controller


{
    public function getCarData(){

    }
    public function getInvoiceData(){
        $data = $this->db->query("SELECT * FROM faktura JOIN auto ON  faktura.idAuto = auto.idAuto  JOIN klient on klient.idKlient = faktura.idKlient JOIN sprzedawca ON sprzedawca.idSprzedawca = faktura.idSprzedawcy");
        $data_query = $data->result_array();
        return $data_query;
    }

    public function getDataCar(){
        $dataCar = $this->db->query("SELECT * FROM auto");
        $dataCar_query = $dataCar->result_array();
        return $dataCar_query;
    }

    public function index()
    {
        $data_query = $this->getInvoiceData();
        $dataCar_query = $this->getDataCar();
        $this->load->view('header');
        $this->load->view('invoices',['invoiceData'=>$data_query,'carData'=>$dataCar_query]);
    }

    public function addInvoice()
    {
        $invoiceNumber = $this->input->post('invoiceNumber');
        $date1 = $this->input->post('date');
        $date = date('m/d/y', strtotime($date1));
        $carID = $this->input->post('carID');
        $clientID = $this->input->post('clientID');
        $sellerID = $this->input->post('sellerID');

        if ($invoiceNumber != null) {
            $this->db->query("SELECT * FROM auto where idAuto=" . $carID);
            if ($this->db->affected_rows() > 0) {
                $this->db->query("SELECT * FROM klient where idKlient=" . $clientID);
                if ($this->db->affected_rows() > 0) {
                    $this->db->query("SELECT * FROM sprzedawca where idSprzedawca=" . $sellerID);
                    if ($this->db->affected_rows() > 0) {
                        $data = array(
                            "numerFaktury" => $invoiceNumber,
                            "data" => $date,
                            "idAuto" => $carID,
                            "idKlient" => $clientID,
                            "idSprzedawcy" => $sellerID
                        );
                        $this->db->insert('faktura', $data);
                        if ($this->db->affected_rows() > 0) {
                            $success = array(
                                'success' => 'Dodano fakture'
                            );
                            $data_query = $this->getInvoiceData();
                            $dataCar_query = $this->getDataCar();
                            $this->load->view('header');
                            $this->load->view('invoices',['success'=>$success,'invoiceData'=>$data_query,'carData'=>$dataCar_query]);
                        } else {
                            $error = array(
                                'error' => 'Błąd przy dodawaniu faktury'
                            );
                            $data_query = $this->getInvoiceData();
                            $dataCar_query = $this->getDataCar();
                            $this->load->view('header');
                            $this->load->view('invoices',['error'=>$error,'invoiceData'=>$data_query,'carData'=>$dataCar_query]);
                        }
                    } else {
                        $error = array(
                            'error' => 'Sprzedawca o podanym ID nie istnieje'
                        );
                        $data_query = $this->getInvoiceData();
                        $dataCar_query = $this->getDataCar();
                        $this->load->view('header');
                        $this->load->view('invoices',['error'=>$error,'invoiceData'=>$data_query,'carData'=>$dataCar_query]);

                    }
                } else {
                    $error = array(
                        'error' => 'Klient o podanym ID nie istnieje'
                    );
                    $data_query = $this->getInvoiceData();
                    $dataCar_query = $this->getDataCar();
                    $this->load->view('header');
                    $this->load->view('invoices',['error'=>$error,'invoiceData'=>$data_query,'carData'=>$dataCar_query]);
                }

            } else {
                $error = array(
                    'error' => 'Auto o podanym ID nie istnieje'
                );
                $data_query = $this->getInvoiceData();
                $dataCar_query = $this->getDataCar();
                $this->load->view('header');
                $this->load->view('invoices',['error'=>$error,'invoiceData'=>$data_query,'carData'=>$dataCar_query]);
            }

        } else {
            $data_query = $this->getInvoiceData();
            $dataCar_query = $this->getDataCar();
            $this->load->view('header');
            $this->load->view('invoices',['invoiceData'=>$data_query,'carData'=>$dataCar_query]);
        }
    }

    public function deleteInvoice(){
        $id = $this->input->post('id');
        $this->db->delete('faktura',array('idFaktura'=>$id));
        if($this->db->affected_rows()>0){
            $success = array(
                'success' => 'Usunięto fakture'
            );
            $data_query = $this->getInvoiceData();
            $dataCar_query = $this->getDataCar();
            $this->load->view('header');
            $this->load->view('invoices',['success'=>$success,'invoiceData'=>$data_query,'carData'=>$dataCar_query]);
        }else {
            $error = array(
                'error' => 'Wystąpił błąd podczas usuniecia lub faktura o takim id nie istnieje'
            );
            $data_query = $this->getInvoiceData();
            $dataCar_query = $this->getDataCar();
            $this->load->view('header');
            $this->load->view('invoices',['error'=>$error,'invoiceData'=>$data_query,'carData'=>$dataCar_query]);
        }
    }

}
