<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class signup extends CI_Controller{
    public function index()
    {
        $this->load->view('signup/index');
    }

    public function maxExpenses()
    {
        $this->load->view('signup/maxExpenses');
    }

	public function salary()
    {
        $this->load->view('signup/salary');
    }

	

	public function status()
    {
        $this->load->view('signup/status');
    }
   }
?>
