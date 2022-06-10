function getCaptchaResponse() {
  var response = grecaptcha.getResponse();

  if(response.length == 0) {
    $("#g-recaptcha-error").show(0);
  } else {
    alert("Continuar con el envio del formulario");
  }
}

function verifyCaptcha() {
  $("#g-recaptcha-error").hide(0);
}

$("#submitForm").click(function() {
  getCaptchaResponse();
});
