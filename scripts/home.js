$(document).ready(function() {
  $('div.input-field:gt(0)').fadeOut(800);
  llenarPosiciones();
});

function llenarPosiciones(){
  $("#posicion").empty();
  for (let i = 0; i < $('#content').find('h5').length; i++) {
     $("#posicion").append('<option value="'+i+'">' 
      + (i+1) + ' - ' + $('#content').find('h5').eq(i).text() 
      + '</option>');
  }
  $('select').formSelect();
}

$("#selectOption").change(function(){
  $('div.input-field:gt(0)').fadeOut(800);
  var opcion = $("#selectOption").val();

  switch(opcion){

    case "1":
     $('div.input-field').eq(2).fadeIn(400);
    break;

    case "2":
     $('div.input-field').eq(1).fadeIn(400);
     $('div.input-field').eq(2).fadeIn(400);
    break;

    case "3":
     $('div.input-field').eq(1).fadeIn(400);
    break;

    case "4":
     $('div.input-field').eq(1).fadeIn(400);
     $('div.input-field').eq(3).fadeIn(400);
    break;

    default:
      M.toast({html: 'Selecciona una opción'})
    break;
  }

});

$("#valor").keydown(function(e) {
  var code = (e.keyCode ? e.keyCode : e.which);
  if(code==13){
    $("#modificarPosicion").click();
  }
});


$("#modificarPosicion").click(function(e) {
    var posicion = $("#posicion").val();
    var valor = $("#valor").val();
    var opcion = $("#selectOption").val();
    var color = $("#color").val();

    switch(opcion){

      case "1":
        if (valor != "") {
          $('#content')
          .append('<h5>' + valor + '</h5>');
          llenarPosiciones();
          reiniciarValores();
        } else {
          M.toast({html: 'Favor de agregar texto'})
        }
      break;

      case "2":
        if (valor != "" && posicion != "") {
          $('#content')
          .find('h5')
          .eq(parseInt(posicion)) 
          .html(valor);
          llenarPosiciones();
          reiniciarValores();
        } else {
          M.toast({html: 'Favor de agregar texto y posicion'})
        }  
      break;

      case "3":
        if (posicion != "") {
          $('#content')
          .find('h5')
          .eq(parseInt(posicion)) 
          .remove();
          llenarPosiciones();
          reiniciarValores();
        } else {
          M.toast({html: 'Favor de agregar posicion'})
        }
      break;

      case "4":
        if (color != "") {
          $('#content')
          .find('h5')
          .eq(parseInt(posicion)) 
          .css('color', color); 
        } else {
          M.toast({html: 'Favor de asignar color'})
        }
      break;

      default:
      M.toast({html: 'Selecciona una opción'})
      break;

    }
  

});

function reiniciarValores(){
  $("#posicion").val("");
  $("#valor").val("");
}

$(document).scroll(function() {
  var sv = $(document).scrollTop();

  if (sv >= 50 && sv <= 90) {
    alert("Entro, posición: " + sv);
  }
});



/*function getCaptchaResponse() {
  var response = grecaptcha.getResponse();

  if(response.length == 0) {
    $("#g-recaptcha-error").fadeIn(400);
  } else {
    alert("Continuar con el envio del formulario");
  }
}

function verifyCaptcha() {
  $("#g-recaptcha-error").fadeOut(800);
}

$("#submitForm").click(function() {
  getCaptchaResponse();
});*/
