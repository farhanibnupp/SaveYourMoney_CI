<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller{
    public function index() //aman
    {
        $data['judul'] = "Login";
        $this->load->view('login/index',$data);
        
    }
    
   }
?>
