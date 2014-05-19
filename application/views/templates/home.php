    <div class="navbar-wrapper">
          <?=validation_errors();  ?>
      
      
          <?=$this->session->flashdata('msg');?>
       
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand title_color" href="#">Ambientação Senac AM</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Início</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ambientes Web <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="http://portalsenac.am.senac.br" target="blank">Postal Senac</a></li>
                    <li><a href="http://portalgenesis.am.senac.br" target="blank">Postal Gênesis</a></li>
                    <li><a href="http://www.am.senac.br" target="blank">Site Senac Am</a></li>
                              
                  </ul>
                </li>                
               
           
                <li  style="margin-top:5px; " class="col-xs-6 col-md-4"> 
           
                  <?=form_open('home/validaMatricula'); ?>
                     <label class="sr-only" for="matricula">Matrícula</label>
                     <input type="text" class="form-control" id="matricula" placeholder="Matrícula" name="matricula">
                 

               </li>
               <li>&nbsp;</li>
               
              
              
               <li style="margin-top:5px;">
                    <input type="submit" class="btn btn-default" value="Entrar">
               </li>
               <?=form_close(); ?>
              </ul>
            </div>
          </div>
        </div>


      </div>

    
    
    </div>

    
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
        
          <div class="container">
          	<img src="<?php echo base_url(); ?>assets/banner/banner1.jpg" alt="First slide" class="img-responsive">
          
          </div>
        </div>
        <div class="item">
         
          <div class="container">
          	<img src="<?php echo base_url(); ?>assets/banner/banner2.jpg" alt="Second slide" class="img-responsive">
          
          </div>
        </div>
        <div class="item">

          <div class="container">
          	<img src="<?php echo base_url(); ?>assets/banner/banner3.jpg" alt="Third slide" class="img-responsive">
           
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <br>
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?=base_url(); ?>assets/images/site/header1.jpg" alt="Generic placeholder image">
          <h2>Senac</h2>
          <p>Pertencente ao Sistema Fecomércio, o Serviço Nacional de Aprendizagem Comercial - SENAC é a maior organização de formação profissional do país no setor de comércio de bens, serviços e turismo. É uma entidade nacional, autônoma, de direito privado, criado através do Decreto Lei nº 8.621, em 10 de janeiro de 1.946, presente nos 26 estados brasileiros e no Distrito Federal.</p>
          <p><a class="btn btn-default" href="#" role="button">Veja + &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle"src="<?=base_url(); ?>assets/images/site/header2.jpg" alt="Generic placeholder image">
          <h2>Senac</h2>
          <p>Pertencente ao Sistema Fecomércio, o Serviço Nacional de Aprendizagem Comercial - SENAC é a maior organização de formação profissional do país no setor de comércio de bens, serviços e turismo. É uma entidade nacional, autônoma, de direito privado, criado através do Decreto Lei nº 8.621, em 10 de janeiro de 1.946, presente nos 26 estados brasileiros e no Distrito Federal.</p>
          <p><a class="btn btn-default" href="#" role="button">Veja + &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?=base_url(); ?>assets/images/site/header3.jpg" alt="Generic placeholder image">
          <h2>Senac</h2>
          <p>Pertencente ao Sistema Fecomércio, o Serviço Nacional de Aprendizagem Comercial - SENAC é a maior organização de formação profissional do país no setor de comércio de bens, serviços e turismo. É uma entidade nacional, autônoma, de direito privado, criado através do Decreto Lei nº 8.621, em 10 de janeiro de 1.946, presente nos 26 estados brasileiros e no Distrito Federal.</p>
          <p><a class="btn btn-default" href="#" role="button">Veja + &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Senac. <span class="text-muted">No Amazonas.</span></h2>
          <p class="lead">No Amazonas, o Senac foi implantado em janeiro de 1947 e hoje conta com 10 Unidades Operativas - entre Centros de Formação Profissional, Centros Especializados, Empresa Pedagógica e Salões-escola - instaladas em Manaus e nos municípios de Manacapuru, Itacoatiara, Parintins e Tefé.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="<?=base_url(); ?>assets/images/site/middle.jpg"  alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="<?=base_url(); ?>assets/images/site/middle2.jpg"  alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Senac. <span class="text-muted">No Amazonas.</span></h2>
          <p class="lead">No Amazonas, o Senac foi implantado em janeiro de 1947 e hoje conta com 10 Unidades Operativas - entre Centros de Formação Profissional, Centros Especializados, Empresa Pedagógica e Salões-escola - instaladas em Manaus e nos municípios de Manacapuru, Itacoatiara, Parintins e Tefé.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Senac. <span class="text-muted">No Amazonas.</span></h2>
          <p class="lead">No Amazonas, o Senac foi implantado em janeiro de 1947 e hoje conta com 10 Unidades Operativas - entre Centros de Formação Profissional, Centros Especializados, Empresa Pedagógica e Salões-escola - instaladas em Manaus e nos municípios de Manacapuru, Itacoatiara, Parintins e Tefé.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="<?=base_url(); ?>assets/images/site/middle3.jpg"  alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Voltar ao Topo</a></p>
        <p>&copy; 2014 Senac - Am &middot; <a href="#">Todos os Direitos Reservados</a> &middot; <a href="#">Termos</a></p>
      </footer>

    </div><!-- /.container --> 