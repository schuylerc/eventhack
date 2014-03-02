<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_events_table extends CI_Migration {

	public function up()
	{
		// Drop table 'groups' if it exists		
		$this->dbforge->drop_table('events');

		// Table structure for table 'groups'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'handle' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'event_name' => array(
					'type' => 'VARCHAR',
					'constraint' => '255'
			),
			'event_description' => array(
				'type' => 'LONGTEXT'
			),
			'start_time' => array(
					'type' => 'TIMESTAMP'
			),
			'finish_time' => array(
					'type' => 'TIMESTAMP'
			),
			'location' => array(
					'type' => 'VARCHAR',
					'constraint' => '255'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('events');

		// Dumping data for table 'groups'
		$data = array(
			array(
				'id' => '1',
				'handle' => '1QA2WS3ED4RF',
				'event_name' => 'Awesome Event',
				'event_description' => 'Administrator forgot to fill this out',
				'start_time' => '2014-05-05 12:23:25',
				'finish_time' => '2014-05-05 16:27:26',
				'location' => 'Somewhere'
			),
			array(
				'id' => '2',
				'handle' => 'coolhandle',
				'event_name' => 'Awesome Event TWO',
				'event_description' => 'Administrator did it again',
				'start_time' => '2014-05-07 22:27:03',
				'finish_time' => '2014-05-08 18:19:20',
				'location' => 'Somewhere AWESOME'
			)
		);
		$this->db->insert_batch('events', $data);

	}

	public function down()
	{
		$this->dbforge->drop_table('events');
	}
}
