<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$_SESSION['page'] = 'homepage';
		$this->load->view('homepage');
	}
	function About()
	{
		$_SESSION['page'] = 'about';
		$this->load->view('about');
	}
}
