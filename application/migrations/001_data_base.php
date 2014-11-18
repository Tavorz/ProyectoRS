<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Migration_Data_Base extends CI_Migration { 

		public function up() { 

			$fields = array(
 
            'id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment'=> TRUE
            ),
 
            'rfc' => array(
                'type'          => 'VARCHAR',
                'constraint'    => 13,
                'unique'        => TRUE
            ),

            'cargo' => array(
                'type'          => 'VARCHAR',
                'constraint'    => 13
            ),

            'nombre' => array(
                'type'          => 'VARCHAR',
                'constraint'    => 20
            ),

            'apellido_paterno' => array(
                'type'          => 'VARCHAR',
                'constraint'    => 20
            ),

            'apellido_materno' => array(
                'type'          => 'VARCHAR',
                'constraint'    => 20
            ),
 
            'email' => array(
                'type'          => 'VARCHAR',
                'constraint'    => 30
            ),
 
            'password' => array(
                'type'          => 'VARCHAR',
                'constraint'    => 42
            ),
        	);
 
	        $this->dbforge->add_field($fields);
	        $this->dbforge->add_key('id', TRUE);
	        $this->dbforge->create_table('profesores');
   	 	}
 
	    public function down() {
	        $this->dbforge->drop_table('profesores');
	    }

	} 
?>