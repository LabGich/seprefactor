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
	function Contact()
	{
		$_SESSION['page'] = 'contact';
		$this->load->view('contact');
	}
	function Events()
	{
		$_SESSION['page'] = 'events';
		$this->load->view('events');
	}
	function Sexualhealth()
	{
		$_SESSION['page'] = 'sexualhealth';
		$this->load->view('sexualhealth');
	}
	function Healthhygiene()
	{
		$_SESSION['page'] = 'healthhygiene';
		$this->load->view('healthhygiene');
	}
	function Communitydevelopment()
	{
		$_SESSION['page'] = 'communitydevelopment';
		$this->load->view('communitydevelopment');
	}
	function Soccer()
	{
		$_SESSION['page'] = 'soccer';
		$this->load->view('soccer');
	}
	function youth()
	{
		$_SESSION['page'] = 'youth';
		$this->load->view('youth-self-help');
	}
	function Causes()
	{
		$_SESSION['page'] = 'causes';
		$this->load->view('causes');
	}
	function Blog()
	{
		$_SESSION['page'] = 'blog';
		$this->load->view('blog');
	}
}
