<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header.php');
		
		$this->load->view('about_view');

		$this->load->view('include/footer.php');

	}

}