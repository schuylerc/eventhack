<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('event_model');
		//$this->checkLogin();
	}
	
	public function index(){
	
		//$this->beginView();
		//get vars
		//$this->load->view('connect/home');
		//$this->endView();
	
	}
	public function view($handle = NULL){
		$this->beginView();
		//this will load the event layout when the stuff below is figured out
		if(!isset($handle)){
			//error message because event wasn't passed in
			$this->load->view('event/notfound');
		}
		else{
		//TODO - $data['event'] = $this->event_model->get_event($handle);
		$data['eDetail'] = $this->event_model->get_event_details($handle);
		$data['handle'] = $handle;
		$this->load->view('event/view', $data);
		}
		$this->endView();
	}

	public function edit($handle = NULL){
		$this->beginView();
		//this will load the event layout when the stuff below is figured out
		if(!isset($handle)){
			//error message because event wasn't passed in
			$this->load->view('event/notfound');
		}
		else{
		//TODO - $data['event'] = $this->event_model->get_event($handle);
		$data['eDetail'] = $this->event_model->get_event_details($handle);
		$this->load->view('event/edit', $data);
		}
		$this->endView();
	}
	
}