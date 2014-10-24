<?php
class Usuarios_model extends CI_Model{
    function ValidarUsuario($email,$password){ 
         $password= md5($password)           //    Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el mail y password ingresados en pantalla de login
        $query = $this->db->where('correoEmail',$email);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
        $query = $this->db->where('password',$password);
        $query = $this->db->get('profesor');
        return $query->row();     //    Devolvemos al controlador la fila que coincide con la búsqueda. (FALSE en caso que no existir coincidencias)
    }
}
?>