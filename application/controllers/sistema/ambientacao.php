<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ambientacao extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		if(!$this->session->userdata('logado')){

			redirect();

		}

		$this->load->library('grocery_CRUD');
	}

	public function index(){
		
		$this->template->load('sistema/index','sistema/templates/home');
	}

	public function slide($id = null){
		try{
					 $this->db->where('id', $id);
			$dados = $this->db->get('tbl_conteudo')->result();
			if(!$dados){

				throw new Exception("Fim");
				
			}

			foreach ($dados as $value) {
				
				if(isset($value->conteudo) && !empty($value->conteudo)){

	/****************************************************************************/					
					if($value->tbl_tipo_id == 3){/*QUESTOES*/
							/*FUNCAO TRATA QUESTOES*/
								/*$function = function( $dados ){

									$lista = explode(',', $dados);
									if(is_array($lista)){

										$lista = array_filter($lista);
									
									}
		
								
								return $lista;
							};*/
							/*FIM FUNCAO TRATA QUESTOES*/
							 

							//$listaQuestoes = $function($value->conteudo);
							
							unset($listaQuestoes[count($listaQuestoes)-1]);

						echo ' 

							<div style="font-size:25px;font-weight: bold;color:white;" class="bg-primary"><center> '.$value->titulo.' </center></div> 

							<div class="bg-success" style="text-align:justify;padding:10px 10px 10px 10px ;height:600px;">
							<br><br>

								';
								echo form_open('sistema/ambientacao/corrige/');

									/*********************QUESTOES*********************/
											
										foreach ($listaQuestoes as $questao) {
														
											echo $questao;
										}

									 echo '
									 
									 		<br><br><br>
									 		<input type="hidden" id="idConteudo" name="idConteudo" value="'.$value->id.'" />
									 		<input type="hidden" name="idcategoria" value="'.$value->tbl_categoria_id.'" />
									 		<input type="hidden" name="idfuncionario" value="'.$this->session->userdata('id').'" />
	      									<button type="submit" class="btn btn-default">Enviar</button>
	    								
									 ';	
								echo form_close();		
									/*********************QUESTOES*********************/	


							echo '

							</div>
							';
					}else{

						echo '

							<div style="font-size:25px;font-weight: bold;color:white;" class="bg-primary"><center> '.$value->titulo.' </center></div>
							<div class="bg-warning" style="text-align:justify;padding:10px 10px 10px 10px ;height:600px;">
									
									'.$value->conteudo.'
							
							
							</div>
							<input type="hidden" id="idConteudo" name="idConteudo" value="'.$value->id.'" />
						';	
					}

					

				}else{


					echo '<img src="'.base_url().'assets/uploads/conteudo/'.$value->imagem.'" class="img-responsive"/><input type="hidden" id="idConteudo" name="idConteudo" value="'.$value->id.'" />';



				}
	/****************************************************************************/				
			}
		 }catch(Exception $e){

		 	echo $e->getMessage();
		 }
		}

		/*public function corrige(){

			$resposta 	    = $this->input->post('conteudo');

			$idConteudo     = $this->input->post('idConteudo');

			$idfuncionario  = $this->input->post('idfuncionario');


		  try{	
		  	if(!isset($resposta)){

		  		throw new Exception("Escolha uma resposta!");
		  		
		  	}

			foreach ($resposta as $value) {
				
				$respostaEscolhida =  $value;
			}


						$this->db->where('id', $idConteudo);
			$questao =  $this->db->get('tbl_conteudo')->result();


			$function = function( $dados ){

			$lista = explode(',', $dados);
				if(is_array($lista)){

					$lista = array_filter($lista);
				
				}

			
				return end($lista);
			};

			$respostaCerta = htmlspecialchars(trim(strip_tags($function($questao[0]->conteudo))));
			$respostaCerta = ereg_replace("/&#?[a-z0-9]{2,8};/i","",$respostaCerta);
			echo $respostaCerta;
			if(trim($respostaEscolhida) == $respostaCerta){

				echo "Acertou";

			}else{

				echo "Errou";
			}

			

		  }catch(Exception $e){

		  	echo $e->getMessage();
		  }
		}*/

}

/* End of file system.php */
/* Location: ./application/controllers/system/system.php */

?>