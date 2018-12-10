<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Clogin extends CI_Controller {

		public function autentica(){

			$this->load->model("usuarios_model");

			$email = $this->input->post("email");
			$senha = $this->input->post("senha");

			$usuarioOK  = $this->usuarios_model->verificaLogin($email,$senha);

			if($usuarioOK){

				$this->session->set_userdata("usuario_logado", $usuarioOK);
				$this->session->set_flashdata("success","Logado com Sucesso!");
			}else{

				$this->session->set_flashdata("danger", "Usuário ou Senha Inválidos!");
			}
			
			redirect('cprodutos/index');

			
		}

		public function logout(){

			$this->session->unset_userdata("usuario_logado");
			$this->session->set_flashdata("success","Usuário Deslogado!");

			redirect("cprodutos/index");
		}
	}
?>
