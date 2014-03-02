<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Event_model extends CI_Model{


	public function __construct(){
		parent::__construct();
		$this->load->database();

	}
	/*
	 * Gets the events for a given handle
	 * 
	 * @param handle string
	 * @return event object
	 * @acccess public
	 * 
	 */
	public function get_event($handle){
		$query = $this->db->get_where('events', array('handle' => $handle));
		return $query->result_object();
	}
	
	/*
	 * get events list
	 * 
	 * @return events list object
	 * @access public
	 * 
	 */
	public function get_events_list(){
		$query = $this->db->get_where('events');
		return $query->result_object();
	}

	public function add_new_event($eventName, $eventDate, $eventLocation, $eventDesc)
	{
		$data = array(
			'event_name' => $eventName,
			'start_time' => $eventDate,
			'location' => $eventLocation,
			'event_description' => $eventDesc
		 );
		
		$query = $this->db->insert('events', $data);
		//generate handle and return it
		return $this->generate_handle($this->db->insert_id());

	}
	
	public function generate_handle($event_id){
		return hash ("md5", $event_id);
	}
	
	public function generate_event_json(){
		$query = $this->db->get_where('events');
		return json_encode($query->result_array());
	}
}