<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
	
	}

	public function index(){

		$this->template->load('index','templates/home');	
	}

	public function validaMatricula( $dados = null){

			try{
				$this->form_validation->set_rules('matricula', 'Matrícula:', 'required');
				$mensagem = '

						 <div class="alert alert-warning">
        				  <center><a href="#" class="alert-link">O Campo %s é obrigatório</a></center>
      					 </div>
				';
				$this->form_validation->set_message('required', $mensagem);	
		
			
			if ($this->form_validation->run() == FALSE){
				
				$this->index();
		
			}else{
				
						 $matricula = (int)$this->input->post('matricula');
						 $this->db->where('matricula', $matricula);	
				$query = $this->db->get('tbl_funcionario')->result();
				if(!$query){

					throw new Exception("Usuário não encontrado!");
					
				}
									$this->db->select('id,nome');	
									$this->db->where('matricula', $matricula);
					$dadosUser =	$this->db->get('tbl_funcionario')->result();

					$array = array(

						'id'		 => $dadosUser[0]->id,	
						'nome'       => $dadosUser[0]->nome,
						'matricula'  => $matricula,
						'logado'	 => true
					);
					
					$this->session->set_userdata( $array );

						
				redirect("sistema/ambientacao/");
		
			}
			}catch(Exception $e){
				$mensagem = ' <div class="alert alert-warning">
        				  			<center> <a href="#" class="alert-link">'.$e->getMessage().'</a></center>
      					 	 </div>';
				$this->session->set_flashdata('msg', $mensagem);
				redirect("home");
				
		
				
			}
		

	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */