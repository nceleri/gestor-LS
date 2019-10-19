function activar(id) {
  bootbox.confirm("¿Desea cambiar el estado del socio: " + id + " ?", function(
    result
  ) {
    if (result == true) {
      $.ajax({
        url: "activa_socio.php?n=" + id,
        type: "POST",
        dataType: "html",
        data: { id: id }
      }).done(function(resultado) {
        bootbox.alert(
          "Se paso a activo el socio: dni " + id + " correctamente"
        );
      });
    }
  });
}

function eliminacion(id) {
  bootbox.confirm("¿Desea dar de baja el socio: " + id + " ?", function(
    result
  ) {
    if (result == true) {
      $.ajax({
        url: "baja_socio.php?n=" + id,
        type: "POST",
        dataType: "html",
        data: { id: id }
      }).done(function(resultado) {
        bootbox.alert("Se dio de baja el socio: dni " + id + " correctamente");
      });
    }
  });
}

function abrir(id) {
  console.log(id);

  window.location = "ver_socio.php?n=" + id;

  // open('ver_socio.php?n=' + url, '', 'top=700,left=700,width=700,height=500');
}

// var dialog = bootbox.dialog({
//   title: 'A custom dialog with init',
//   message: '<p><i class="fa fa-spin fa-spinner"></i> Loading...</p>'
// });

// dialog.init(function(){
//   setTimeout(function(){
//       dialog.find('.bootbox-body').html('I was loaded after the dialog was shown!');
//   }, 3000);
// });
