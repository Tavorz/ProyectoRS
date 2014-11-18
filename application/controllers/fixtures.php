<?php
    if(!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Fixtures extends CI_Controller {

        function index() {
            $this->load->database();
            $this->usuario();
            echo 1;
        }

        function usuario() {
            $table = 'usuario';
            $this->load->database();
            $this->db->truncate($table);
            
            $users = array(
                array(
                    'id' => 1,
                    'nombre' => 'test',
                    'correo' => 'test@itm.com'
                ),
                array(
                    'id' => 2,
                    'nombre' => 'jose',
                    'correo' => 'jose@itm.com'
                ),
                array(
                    'id' => 3,
                    'nombre' => 'roberto',
                    'correo' => 'roberto@itm.com'
                ),
                array(
                    'id' => 4,
                    'nombre' => 'filadelfo',
                    'correo' => 'fili@itm.com'
                ),
                array(
                    'id' => 5,
                    'nombre' => 'marcos',
                    'correo' => 'marcos@itm.com'
                ),
                array(
                    'id' => 6,
                    'nombre' => 'maria',
                    'correo' => 'maria@itm.com'
                )
            );
            $this->db->insert_batch($table, $users);     
        }

    }
?>
