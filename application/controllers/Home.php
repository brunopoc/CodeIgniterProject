<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('template/frontend/header');
		$this->load->view('frontend/home');
		$this->load->view('template/frontend/footer');
		
;	}
}
