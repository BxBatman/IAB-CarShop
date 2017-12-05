<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller
{
    public function index()
    {   if(!isset($_SESSION['imie'])){
        $this->load->view('login');
        }else {
        $this->load->view('header');
        $this->load->view('home');
    }
    }


}
