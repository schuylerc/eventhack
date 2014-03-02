<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Update_events_table extends CI_Migration {

	public function up()
	{
		// Add column parking location
		$fields = array(
				'parking_location' => array('type' => 'VARCHAR', 'constraint' => '255')
		);
		$this->dbforge->add_column('events', $fields);
		

	}

	public function down()
	{
		$this->dbforge->drop_column('events', 'parking_location');
	}
}

