<!DOCTYPE html>
<html lang="pt-br">
  <header> 
    <meta charset="UTF-8">

    <title>:::AMBIENTAÇÃO - SENAC- AM:::</title>
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="http://bootswatch.com/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="http://bootswatch.com/cerulean/bootstrap.csss">
    <!--End Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/site_css.css">
  </header>
  <body>
    
      


<div class="col-md-6 col-md-offset-3">

  <br>
  <br>
  <br>
  <br>
  <center> <img src="<?=base_url(); ?>assets/images/logo.png" alt="logo" width="200px;"> </center>
  <br>
  
 <center><h2> Área Administrativa </h2></center>
</div>

<div class="col-md-6 col-md-offset-3">
<form class="form-horizontal" role="form" method="post" action="<?=base_url();?>admin/login/logar">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="senha">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Logar</button>
    </div>
  </div>
</form>
  <div><center>  <?=validation_errors(); ?> <?=$this->session->flashdata('erro');  ?></center></div>
</div>


 
  </body>
  <!--Jquery-->
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <!--End Jquery--> 
  <!--Script Boostrap -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <!--End Script Boostrap -->
  <!--Custon -->
  <script type="text/javascript" src="<?=base_url(); ?>assets/js/script.js"></script>
  <!--End Custon -->


</html>

