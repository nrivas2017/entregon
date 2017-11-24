$(document).ready(Principal);
  function Principal(){
    $(".reg").click(Form);
    }

  function Form(){
    $.ajax({
    url:"../registro.html",
    success: function(datos){
      $('#lista').html(datos)
      }
    })
  } 