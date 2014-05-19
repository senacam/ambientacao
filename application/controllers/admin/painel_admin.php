<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Painel_admin extends CI_Controller {

	private $idUser;

	public function __construct(){
		   
	   parent::__construct();
	   if(!$this->session->userdata('logado')){

			redirect();

		}
	   $this->load->library('grocery_CRUD');
	   $this->load->library('mineraDados');
		
	}

	public function index($id = null){

		$this->template->load('admin/index','admin/templates/home');	
	}		

	public function cadastraUsuario($id  = null){

		try{
			$crud = new grocery_CRUD();

			$crud->set_crud_url_path(site_url('admin/painel_admin/cadastraUsuario'));
			$crud->set_table('tbl_usuario');
			$crud->set_subject('Usuário');
			$crud->columns('id','nome','matricula','email','tbl_status_id');
			$crud->display_as('nome','Nome')->display_as('matricula','Matrícula')
				 ->display_as('email','E-mail')->display_as('senha','Senha')
				 ->display_as('tbl_status_id','Status')->display_as('id','Código');
			$crud->required_fields('nome','matricula','email','senha');
			$crud->set_relation('tbl_status_id','tbl_status','tipo');
			$crud->change_field_type('senha', 'password');
			$crud->unique_fields('matricula','matricula');
			$crud->set_rules('email','E-mail','valid_email');
			$crud->callback_before_insert(array($this,'encryptPassWordCallback'));
			$crud->callback_before_update(array($this,'encryptPassWordCallback'));
		
			$output = $crud->render();

			$this->template->load('admin/index','admin/templates/cadastra_usuario',$output);	

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}		
		
	}

	public function cadastraCategoria($id = null){

		try{
			/*ID USER*/
			$idUser = $this->setIdUser($this->session->userdata('id'))->getIdUser();


			$crud = new grocery_CRUD();

			$crud->set_crud_url_path(site_url('admin/painel_admin/cadastraCategoria'));
			$crud->set_table('tbl_categoria');
			$crud->set_subject('Categoria');
			$crud->columns('id','nome');
			$crud->display_as('nome','Nome')->display_as('id','Código');
			$crud->required_fields('nome');
			
			$crud->unique_fields('nome','nome');
			$crud->field_type('tbl_usuario_id', 'hidden', $idUser);		
			$output = $crud->render();

			$this->template->load('admin/index','admin/templates/cadastra_categoria',$output);	


		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}

	/*CONTROLADOR CADASTRA CONTEUDO: HTML E QUESTÕES*/
	public function cadastraConteudo($id = null){
   		 try{
			/*ID USER*/
			$idUser = $this->setIdUser($this->session->userdata('id'))->getIdUser();

			$crud = new grocery_CRUD();

			$crud->set_crud_url_path(site_url('admin/painel_admin/cadastraConteudo'));
			$crud->set_table('tbl_conteudo');
			$crud->set_subject('Conteúdo');
			$crud->columns('id','titulo','conteudo','imagem');
			
			$crud->display_as('id','Código')->display_as('titulo','Título')
				 ->display_as('conteudo','Conteúdo')->display_as('tbl_tipo_id','Tipo')
				 ->display_as('tbl_categoria_id','Categoria')->display_as('imagem','Imagem');
			$crud->add_fields('titulo','tbl_tipo_id','conteudo','imagem','tbl_categoria_id','tbl_usuario_id');
			$crud->edit_fields('titulo','conteudo','imagem','tbl_categoria_id','tbl_usuario_id');
			$crud->required_fields('titulo','tbl_tipo_id','tbl_categoria_id');

			/**UPLOAD**/
			$crud->set_field_upload('imagem','assets/uploads/conteudo');
			/**END UPLOAD**/
			$crud->set_relation('tbl_tipo_id','tbl_tipo','nome');
			$crud->set_relation('tbl_categoria_id','tbl_categoria','nome');
			$crud->field_type('tbl_usuario_id', 'hidden', $idUser);		

			$output = $crud->render();

/******************STATE***********************************************************************************/
			 $state = $crud->getState();
    		 $state_info = $crud->getStateInfo();

    		 if($state == 'edit'){
    		 	/****CAMPO TIPO OCULTO*****/

    		 
    		 /*
    		 *CASO O CAMPO DO CONTEUDO ESTEJA VAZIO, O MESMO SERA OCULTADO
    		 *E O CAMPO IMAGEM SERA MOSTRADO
    		 */	
    		 $this->getJquery();	
    		 $conteudoJS = <<<JAVASCRIPT
<script type="text/javascript">
					  $(function(){
							
							$('#conteudo_display_as_box').hide();
							$('#conteudo_input_box').hide();

					});
    		 	</script>
    		 	
JAVASCRIPT;
			
			$imagemJS = <<<JAVASCRIPT
<script type="text/javascript">
					  $(function(){
							$('.gc-file-upload').hide();
							$('.fileinput-button').hide();
							$('#imagem_display_as_box').hide();

					});
    		 	</script>
JAVASCRIPT;
			
    		 	/****ID*****/
    		 	$id = $state_info->primary_key;

    		 	$query = $this->db->get_where('tbl_conteudo', array('id' => $id))->result();
    		 	

    		 	if(!isset($query[0]->conteudo)){
					/*SE O CAMPO CONTEUDO ESTIVER VAZIO ELE FICARA OCULTO*/
    		 		echo $conteudoJS;

    		 	}elseif(!isset($query[0]->imagem)){
    		 		/*SE O CAMPO IMAGEM ESTIVER VAZIO ELE FICARA OCULTO*/	
    		 		echo $imagemJS;
    		 	}


    		 }
 
/******************STATE***********************************************************************************/

			 $this->template->load('admin/index','admin/templates/cadastra_conteudo',$output);	


		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}	
		
	}

	public function cadastraFuncionario($id = null){
		try{
			$crud = new grocery_CRUD();
			
			/*ID USER*/
			$idUser = $this->setIdUser($this->session->userdata('id'))->getIdUser();

			$crud->set_crud_url_path(site_url('admin/painel_admin/cadastraFuncionario'));
			$crud->set_table('tbl_funcionario');
			$crud->set_subject('Funcionário');
			$crud->columns('id','nome','matricula');

			$crud->display_as('nome','Nome')->display_as('matricula','Matrícula')->display_as('id','Código');
				
			$crud->required_fields('nome','matricula');		
			$crud->unique_fields('matricula','matricula');
			$crud->field_type('tbl_usuario_id', 'hidden', $idUser);	

			$output = $crud->render();

			$this->template->load('admin/index','admin/templates/cadastra_funcionario',$output);	

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}	


	}
	

	

	/***********************END********************************/
	public function sair(){

		$this->session->sess_destroy();
		redirect();
	}
	public function getJquery(){
		echo '<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>';
	}
	/*RETURN ID USER*/
	public function setIdUser($id = null){

		$this->idUser = $id;
		return $this;

	}

	public function getIdUser(){

		return $this->idUser;

	}
	/*END RETURN USER*/

	/*FUNCTIONS CALLBACK*/

	public function encryptPassWordCallback($postArray = null) {
		  
		  
		  $postArray['senha'] = md5($postArray['senha']);
		 
		  return $postArray;
	}

	/*END FUNCTIONS CALL BACK*/
}

/* End of file painel_admin.php */
/* Location: ./application/controllers/admin/painel_admin.php */
?>