$(function(){
	var pathName = window.location.pathname;


  /*******************CADASTRACONTEUDO**************************************/
	if(pathName == '/ambientacao/admin/painel_admin/cadastraConteudo/add'){
		/****************IMAGEM********************/
		$('.gc-file-upload').hide();
		$('.fileinput-button').hide();
		$('#imagem_display_as_box').hide();
		/****************IMAGEM*********************/
		/****************CONTEUDO*******************/

		$('#conteudo_display_as_box').hide();
		$('#conteudo_input_box').hide();

		/****************CONTEUDO*******************/

		$('#field-tbl_tipo_id').live('change',function(){

			var page = $(this).val();
			if(page == 1){


				$('#conteudo_display_as_box').show();
				$('#conteudo_input_box').show();

				$('.gc-file-upload').hide();
				$('.fileinput-button').hide();
				$('#imagem_display_as_box').hide();

			}else if(page == 2){

				$('.gc-file-upload').show();
				$('.fileinput-button').show();
				$('#imagem_display_as_box').show();

				$('#conteudo_display_as_box').hide();
				$('#conteudo_input_box').hide();
			}else if(page == 3){
				$('#conteudo_display_as_box').show();
				$('#conteudo_input_box').show();

				$('.gc-file-upload').hide();
				$('.fileinput-button').hide();
				$('#imagem_display_as_box').hide();


			}
		
			
		
			
		});
		

	}

   /*******************CADASTRACONTEUDO************************************/
    $(function() {
    $( "#accordion" ).accordion();


  });





});

