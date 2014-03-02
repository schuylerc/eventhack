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
}