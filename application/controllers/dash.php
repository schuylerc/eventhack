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
		//get user info

        $data['user'] = $this->ion_auth->user()->row();
		$this->load->view('header', $data);
		$this->load->view('dash');
		$this->load->view('footer');
	
	}
	
	public function test(){
		$this->load->view('event/view');
	}
	
	public function testMap(){
		$this->load->view('event/map');
	}
}