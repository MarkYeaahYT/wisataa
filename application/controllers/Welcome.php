<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view("index");
	}

	public function packages()
	{
		$this->load->view("tampilan/packages");
	}
}
