<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('welcome_m');
		
		
	}

	public function index()
	{
		$this->load->view("tampilan/packages");
	}

	public function showdata_xhr()
	{
	 	echo json_encode($this->welcome_m->showdata_xhr());
	}

	public function cari_xhr()
	{
	 	echo json_encode($this->welcome_m->cari_xhr());
	}

	
}
