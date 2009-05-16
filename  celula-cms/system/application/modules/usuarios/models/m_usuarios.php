<?php
class M_usuarios extends Model {

    var $dato   = array();

    function __construct()
    {
        // Llamando al contructor del Modelo
        parent::Model();
        $this->load->database();
    }
    function insertaUsuario (){
        return "hola mundo";
        
    }
    function verUsuarios(){
        $sql = "
        SELECT
            u.id_usuario, 	       
            u.nombre_vista, 	
            u.nombre_usuario, 
            u.nivel,
            p.mail
        FROM `usuarios` u
        LEFT JOIN `perfil` p
        ON u.id_usuario = p.id_usuario
    ";
     $query = $this->db->query($sql);   
     return  $query->result();   
    }
}
?>