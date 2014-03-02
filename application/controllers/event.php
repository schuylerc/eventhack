<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {
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
	
	}
	public function view($handle = NULL){
		if(!isset($handle)){
			//error message because event wasn't passed in
			$this->load->view('event/notfound');
		}
		else{
		//TODO - $data['event'] = $this->event_model->get_event($handle);
		$this->load->view('event/view');
		}
	}
}