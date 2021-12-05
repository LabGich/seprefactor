<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$_SESSION['page'] = 'homepage';
		$this->load->view('homepage');
	}
	function contactpost(){
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://mail.supremecluster.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'mailserver@etherstaff.solutions';
		$config['smtp_pass']    = 'Mails@ethersolutions12';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'text'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not          

		$this->email->initialize($config);

		$this->load->library('email');

		$this->email->from('mailserver@etherstaff.solutions', $_POST['name']);
		$this->email->to('cheruiyotkenedy@gmail.com');
		// $this->email->cc('info@etherstaff.solutions');
		// $this->email->bcc('taye.ayeni@etherstaff.solutions');

		$this->email->subject($_POST['subject']);
		$message = $_POST['message']."\r\n \r\nEmail: " . $_POST['email'] . " \r\n Name: " . $_POST['name'];
		$this->email->message($message);

		if ($this->email->send()) {
			echo "OK";
		} else {
			echo "Failed";
		}
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
	function Sexualhealthinfo()
	{
		$_SESSION['page'] = 'sexualhealth';
		$this->load->view('sexualhealthpg');
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
