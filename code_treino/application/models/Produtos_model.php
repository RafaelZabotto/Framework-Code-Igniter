<?php

    class Produtos_model extends CI_Model{

        public function buscaTodos(){

            return $this->db->get("produtos") -> result_array();
        }

        public function salvarProduto($produto){

            $this->db->insert("produtos",$produto);

        }

        public function retornaID($id){

            return $this->db->get_where("produtos", array("id" => $id))->row_array();
        }
    }