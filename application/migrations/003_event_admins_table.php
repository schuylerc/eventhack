<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Event_admins_table extends CI_Migration {

	public function up()
	{
		// Drop table 'groups' if it exists		
		$this->dbforge->drop_table('event_admins');

		// Table structure for table 'groups'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'event_id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8'
			),
			'user_id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('event_admins');

	}

	public function down()
	{
		$this->dbforge->drop_table('event_admins');
	}
}
