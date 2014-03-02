<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dash extends MY_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->model('event_model');

		//$this->checkLogin();
	}
	
	public function index(){
		$this->beginView();

        $data['event'] = $this->event_model->get_events_list();
		$this->load->view('dash', $data);

		$this->endView();
	
	}
	
	public function test(){
		$this->load->view('event/view');
	}
	
	public function loadMap(){
		$this->load->view('event/map');
	}

	public function ajax_add_event(){
		$eName = $_POST['EventName'];
		$eDate = $_POST['EventDate'];
		$eEndDate = $_POST['EventEndDate'];
		$eLocation = $_POST['EventLocation'];
		$eDesc = $_POST['EventDesc']; 


		echo $this->event_model->add_new_event($eName, $eDate, $eLocation, $eDesc, $eEndDate);

	}
	
	public function ajax_timeline_json(){
		$object = $this->event_model->generate_event_json();
		header('Content-type: text/json');
		header('Content-type: application/json');
		echo $object;
	}

}