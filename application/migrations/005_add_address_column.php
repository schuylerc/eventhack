<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_address_column extends CI_Migration {

	public function up()
	{
		// Add column parking location
		$fields = array(
				'address' => array('type' => 'VARCHAR', 'constraint' => '255')
		);
		$this->dbforge->add_column('events', $fields);
		

	}

	public function down()
	{
		$this->dbforge->drop_column('address', 'parking_location');
	}
}

