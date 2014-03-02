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

	public function add_new_event($eventName, $eventDate, $eventLocation, $eventDesc, $eEndDate, $address, $parking_location)
	{
		$data = array(
			'event_name' => $eventName,
			'start_time' => $eventDate,
			'location' => $eventLocation,
			'event_description' => $eventDesc,
			'finish_time' => $eEndDate,
			'address' => $address,
			'parking_location' => $parking_location
		 );
		
		$query = $this->db->insert('events', $data);
		//generate handle and return it
		return $this->generate_handle($this->db->insert_id());

	}
	
	public function generate_handle($event_id){
		$hash = hash ("md5", $event_id);
		$data = array(
               'handle' => $hash
            );

		$this->db->where('id', $event_id);
		$this->db->update('events', $data);

		return $hash;
	}


	public function get_event_details($handle){
		
		$query = $this->db->get_where('events', array('handle' => $handle));
		$toreturn = $query->result_object();
		return $toreturn[0];
	}



	
	public function generate_event_json(){
		$query = $this->db->get_where('events');
		$datetoencode = array();
		foreach ($query->result_object() as $item){
			$toencode[] = array('startDate' => date("Y,m,d", strtotime($item->start_time)), 'endDate' => date("Y,m,d", strtotime($item->finish_time)), 'headline' => $item->event_name, 'text' => $item->event_description);
		}
		$toencode = array('timeline' => array('type' => 'default', 'date' => $toencode,));
		return json_encode($toencode);
	}
	
	public function send_mail($address, $subject, $body){
		include '/assets/sendgrid-php/SendGrid_loader.php';
		
		//TODO - code to send an e-mail using the paramaters passed in
	}

}