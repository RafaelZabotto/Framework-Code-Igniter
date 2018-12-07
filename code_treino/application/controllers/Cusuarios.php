<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Cusuarios extends CI_Controller {

		public function novo(){

			$usuario = array(

				"nome" => $this-> input-> post("nome"),
				"email" => $this-> input-> post("email"),
				"senha" => md5($this-> input-> post("senha"))
			);

			$this->load->model("usuarios_model");
			$this->usuarios_model->salvaUsuario($usuario);
			$this->load->view('usuario/novo');
			
			
		}
	}
?>
