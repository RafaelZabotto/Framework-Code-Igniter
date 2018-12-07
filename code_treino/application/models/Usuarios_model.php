<?php

    class Usuarios_model extends CI_Model{

        public function salvaUsuario($usuario){

             $this->db->insert("usuario",$usuario);
        }

        public function verificaLogin($email, $senha){

            $this->db->where("email",$email);
            $this->db->where("senha",$senha);
            $usuarioEncontrado = $this->db->get("usuario")->row_array();
            return $usuarioEncontrado;
        }
    }


?>