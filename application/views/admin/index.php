<!DOCTYPE html>
<html lang="pt-br">
 	<header> 
 		<meta charset="UTF-8">

 		<title>:::AMBIENTAÇÃO - SENAC- AM:::</title>

 		<!--Bootstrap CSS -->
 		
 		<link rel="stylesheet" href="http://bootswatch.com/cerulean/bootstrap.csss">
 		<!--End Bootstrap CSS -->
 		<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/site_css.css">
 		
 		<?php 
		if(isset($css_files) && isset($js_files)):
			foreach($css_files as $file): ?>
				<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
		<?php 
			endforeach;
		 endif;	
		 ?>

		<link rel="stylesheet" href="http://bootswatch.com/cerulean/bootstrap.min.css">
 	</header>
 	<body>
 		<div class="container">
 			<?php $page = $this->uri->segment(3); ?>
			<div class="row">
				<div class="col-md-12 col-md-offset 13" > <!--TOPO -->

						  <img src="<?=base_url(); ?>assets/images/topo.jpg" alt="topo" class="img-responsive">
			  			

				</div><!--END TOPO -->


				<div class="col-md-12 col-md-offset 13">
					
					<ol class="breadcrumb">
						  <li class="active"><a href="<?=base_url(); ?>admin/painel_admin/">Início</a></li>

						<?php if(isset($page) && !empty($page)){ ?>
							<?php
							    /*VERIFICA O NOME DAS PÁGINAS PRA INSERIR NO BREADCRUMBS*/ 
								switch ($page) {
									case $page == "cadastraUsuario":
										$valorPagina = "Usuário";
										break;
									case $page == "cadastraCategoria":
										$valorPagina = "categoria";
										break;
									case $page == "cadastraConteudo":
										$valorPagina = "Conteúdo";
										break;
									case $page == "cadastraFuncionario":
										$valorPagina = "Funcionário";
										break;	 		
									
									default:
										
										break;
								}
							 ?>
						    <li class="active"><?php echo $valorPagina; ?></li>		
						
						<?php } ?>  							 

					</ol>

				</div>

			  <div class="col-xs-6 col-md-4" >
			  	
			  

			  		<ul class="nav nav-pills nav-stacked">
			  			<li <?=($page == "cadastraUsuario")    	  ?  'class="active"' : ""; ?>><a href="<?=base_url(); ?>admin/painel_admin/cadastraUsuario/" ><span class="glyphicon glyphicon-user"></span> Usuários            </a></li>
			  			<li <?=($page == "cadastraFuncionario")   ?  'class="active"' : ""; ?>><a href="<?=base_url(); ?>admin/painel_admin/cadastraFuncionario/" ><span class="glyphicon glyphicon-user"></span> Funcionário     </a></li>
			  			<li <?=($page == "cadastraCategoria")  	  ?  'class="active"' : ""; ?>><a href="<?=base_url(); ?>admin/painel_admin/cadastraCategoria/" ><span class="glyphicon glyphicon-th-list"></span> Categorias          </a></li>
			  			<li  <?=($page == "cadastraConteudo") 	  ?  'class="active"' : ""; ?>><a href="<?=base_url(); ?>admin/painel_admin/cadastraConteudo/"><span class="glyphicon glyphicon-ok-sign"></span> Conteúdo </a></li>
			  			<!--<li><a href=""><span class="glyphicon glyphicon-ok-sign"></span> Perguntas </a></li>-->
			  			<li><a href="<?=base_url(); ?>admin/painel_admin/sair/"><span class="glyphicon glyphicon-off"></span> Sair do Sistema </a></li>

					</ul>


			  </div>
 		
 			
 			<?=$contents;?>

 			</div>
 			<br>
	<!-- FOOTER -->
      <footer>
        <center>
        <p>&copy; 2014 Senac - Am &middot; <a href="#">Todos os Direitos Reservados</a> &middot; <a href="#">Termos</a></p>
      	</center>
      </footer>	
 		</div>

 	</body>
 	
 	<!--Script Boostrap -->
 	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 	<!--End Script Boostrap -->
 	<!--Custon -->
 	<script type="text/javascript" src="<?=base_url(); ?>assets/js/script.js"></script>
 	<!--End Custon -->


</html>