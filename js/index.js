$(document).ready(function(){
  $.ajax({
    type: 'get',
    url: 'php/cargar_listas.php'
  })
  .done(function(listas_rep){
    $('#lista_reproduccion').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_rep')
  })

 
})