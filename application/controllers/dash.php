<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dash extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//$this->checkLogin();
	}
	
	public function index(){
	
		//$this->beginView();
		//get vars
		//$this->load->view('connect/home');
		//$this->endView();
		$this->load->view('header');
		$this->load->view('content');
		$this->load->view('footer');
	
	}
	public function test(){
		//$this->load->view('folder/namewithoutphp');
	}
}