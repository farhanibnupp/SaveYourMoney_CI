<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class saveyourmoney extends CI_Controller 
{
	public function dashboard()
	{
		$this->load->view('saveyourmoney/dashboard');
	}
	
	public function stats()
	{
		$this->load->view('saveyourmoney/stats');
	}
	public function settings()
	{
		$this->load->view('saveyourmoney/settings');
	}

}
