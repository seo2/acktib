$('.button-collapse').sideNav({
    closeOnClick: true
});

$('.parallax').parallax();

$('#formContacto').ajaxForm({
    beforeSend: function() {
		console.log('enviando');
		$('#btnEnviar').html('Enviando <i class="fa fa-spinner fa-spin">');
        $('#status').empty();
    },
    uploadProgress: function(event, position, total, percentComplete) {

    },
    success: function() {

    },
    complete: function(xhr) {
		$('#btnEnviar').html('Enviado!');
		
		$('#formContacto')[0].reset();
		
        var respuesta = xhr.responseText;
        console.log(respuesta);
        if(respuesta=='ok'){
				        
        }else if(respuesta=='error1'){
	        //swal("Ha ocurrido un error", "El archivo subido excede el limite de 10mb permitido.", "error");
	    }else{
	        //swal("Ha ocurrido un error", "Por favor vuelve a intentarlo", "error");
        }
        
    }

});
  
$("#owl-demo").owlCarousel({
      navigation : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      autoPlay : true
});

$("#owl-demo2").owlCarousel({
  autoPlay: 3000, //Set AutoPlay to 3 seconds
  navigation : false,
  items : 1
});

$("#owl-demo3").owlCarousel({
  autoPlay: 3000, //Set AutoPlay to 3 seconds
  navigation : false,
  items : 8,
  itemsDesktop : [1199,3],
  itemsDesktopSmall : [979,3],
  itemsMobile : [479,3],
});

$("#owl-demo4").owlCarousel({
  autoPlay: 3000, //Set AutoPlay to 3 seconds
  navigation : true,
      singleItem : true,
});

$('.scrollspy').scrollSpy();