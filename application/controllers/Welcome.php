<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		echo "Welcome to Acardemy!!.."."</br>";
	}

	public function index()
	{
		/*$data['name'] = "Aki";
		$data['email'] = "Aki@gmail.com";*/
		$std1['student']= array(614259054,"Aki","Oni","Sabiy","Software Engineering");
		$this->load->view("Hello_view",$std1);
		//$this->load->view('welcome_message');

		
	}

	public function show($name=null,$last=null)
	{
		echo "Hello ".$name." ".$last;
		$this->_display();
	}

	public function _display()
	{
		echo "</br>"."your live in the Acaedemy";
	}
}
