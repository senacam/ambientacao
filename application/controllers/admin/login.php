<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
	
	}
	
	public function index(){
		
		$this->load->view('admin/templates/login');	
	}

	public function logar(){
	
		try{

			$this->form_validation->set_rules('email', 'E-mail', 'required');
			$this->form_validation->set_rules('senha', 'Senha:', 'required');
			
			$campoEmBranco = '<div class="alert alert-warning"> O campo %s está em branco!</div>';
			$this->form_validation->set_message('required', $campoEmBranco);
				
			if ($this->form_validation->run() == FALSE){
				
				$this->index();
		
			}else{
				
			 		
			  		$senha = md5($this->input->post('senha'));
			  		$email = $this->input->post('email');



					$this->db->get_where( 'tbl_usuario', array( 'senha' => $senha, 'email' => $email ) );
					$query = $this->db->affected_rows();

					if(!$query){

						throw new Exception("Dados inválidos");
						
					}	

					/********************/

								$this->db->select('id,nome');
								$this->db->where('email', $email);
					$listaDados = $this->db->get('tbl_usuario')->result();	


					$sessaoUser = array( 
								 			   'id'	   		=> $listaDados[0]->id,
							                   'nome'  		=> $listaDados[0]->nome,
								               'email' 		=> $email,
								               'logado'		=> TRUE					
								               );

				    $this->session->set_userdata($sessaoUser);


					/********************/

					
					
					redirect("admin/painel_admin/");
		
			}
			}catch(Exception $e){
				$erro = '<div class="alert alert-warning"> '.$e->getMessage().' </div>';
				$this->session->set_flashdata('erro',$erro );
				redirect("admin/login/");
								
			}
		
	}

}



/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
