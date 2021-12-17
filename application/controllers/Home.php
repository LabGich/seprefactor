<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function index()
	{
		$_SESSION['page'] = 'homepage';
		$this->load->view('homepage');
	}
	function contactpost()
	{
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://sepke.org';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'mailserver@sepke.org';
		$config['smtp_pass']    = 'infosepke';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'text'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not          

		$this->email->initialize($config);

		$this->load->library('email');

		$this->email->from('mailserver@sepke.org', $_POST['name']);
		$this->email->to('info@sepke.org');
		$this->email->bcc('cheruiyotkenedy@gmail.com');
		// 
		// $this->email->bcc('taye.ayeni@etherstaff.solutions');

		$this->email->subject($_POST['subject']);
		$message = $_POST['message'] . "\r\n \r\nEmail: " . $_POST['email'] . " \r\n Name: " . $_POST['name'];
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
	function Blogmanage()
	{
		$this->load->view('addblog');
	}
	function Admin()
	{
		$this->load->view('loginpage');
	}
	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$Access = '';

		$getcreds = $this->db->query("SELECT * FROM users WHERE email = '$username' AND password = '$password' ");
		$result = $getcreds->result();

		foreach ($result as $value) {
			$Uname = $value->email;
			$Access = $value->usertype;
			$ID = $value->id;


			$_SESSION['username'] = $Uname;
			$_SESSION['activity'] = time();
			$_SESSION['id'] = $ID;
			$_SESSION['access'] = $Access;
		}
		// var_dump(($value));



		if ($Access == "Admin") {
			echo 'Active';
		} else {
			echo 'Please Check Credentials and try again!';
		}
	}
	function saveblog()
	{
		// var_dump($_POST);

		$title = $_POST['title'];
		$username = $_SESSION['username'];
		$blogcontent = $_POST['blogcontent'];
		$date = date('dS-M-Y h:i:s', time() + 3 * 60 * 60);

		$insertintoblog = $this->db->query("Insert into blogpost(username,title,blogcontent,date) values('$username','$title','$blogcontent','$date')");
		if ($this->db->affected_rows() > 0) {
			echo "<script> alert ('Blog Saved Successfull!')</script>";
			// redirect(base_url(), 'refresh');
		} else {
			echo "error in saving records";
		}
	}
}
