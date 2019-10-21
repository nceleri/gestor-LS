$( document ).ready(function() {
    var url_traeringresos = "ajax/caja.php?op=veringresos";
    $.ajax({
        type: "POST", // TIPO DE PETICION, SIEMPRE POST
        url: url_traeringresos, // aca la url a quien le vas a hacer la peticion asincrona(osea sin recargar la vista)
        success: function(data) { // SUCCESS es una vez que se ejecutó, data es una variable que guarda la respuesta de esa petición que hiciste. 
            $('#tablaingresos').html(data); // aca abajo agarro tablaingresos y le meto por html lo que llegó de respuesta (que es td...th... con los valores)
          }
      });

    var url_traeregresos = "ajax/caja.php?op=veregresos";
    $.ajax({
        type: "POST",
        url: url_traeregresos,
        success: function(data) {
            $('#tablaegresos').html(data);
          }
      });
});


$(document).ready(function() {
  $(ingreso_b).click(function(e) {
    e.preventDefault();
    let error = true;

    if ($("#ingreso_m").val() === "") {
      $("#ingreso_m").val("");
      $("#ingreso_m").focus();
      error = false;
    } else if ($("#ingreso_d").val() === "") {
      $("#ingreso_d").val("");
      $("#ingreso_d").focus();
      error = false;
    } else {
      error = true;
    }


    if (error === false) {
      Swal.fire({
        position: "center",
        type: "error",
        title: "Complete los campos",
        showConfirmButton: false,
        timer: 1500
      });
    } else if (error === true) {
      // ENVIAMOS AL CONTROLADOR DE CAJA UNA PETICION PARA GUARDAR EL EGRESO 
      var url ="http://localhost/gestor-LS-master/ajax/caja.php?op=nuevoingreso";
      var monto = $('#ingreso_m').val();
      var detalle = $('#ingreso_d').val();
      var dataString = "monto="+monto+"&detalle="+detalle;
      $.ajax({
        type: "POST",
        url: url,
        data: dataString,
        success: function(data) {
          if(data == "1"){
              Swal.fire({
              position: "center",
              type: "success",
              title: "Respuesta:",
              text: "Añadido correctamente",
              showConfirmButton: false,
              timer: 1500
              });
              var contenido = "<tr class='table-info'><th scope='row'>-</th><td>"+detalle+"</td><td>"+monto+"</td></tr>";
              $('#tablaingresos').append(contenido);
              setTimeout("window.location='IECaja.php'", 2000 );
          }else{
              Swal.fire({
              position: "center",
              type: "error",
              title: "Hubo un error al añadir el ingreso",
              text: data,
              showConfirmButton: false,
              timer: 1500
              });
          }
        }
      });
    }
  });

  $(egreso_b).click(function(e) {
    e.preventDefault();
    let error = true;

    if ($("#egreso_m").val() === "") {
          $("#egreso_m").val("");
          $("#egreso_m").focus();
          error = false;
    } else if ($("#egreso_d").val() === "") {
      $("#egreso_d").val("");
      $("#egreso_d").focus();
      error = false;
    } else {
      error = true;
    }

    if (error === false) {
      Swal.fire({
        position: "center",
        type: "error",
        title: "Complete los campos",
        showConfirmButton: false,
        timer: 1500
      });
    } else if (error === true) {
      // ENVIAMOS AL CONTROLADOR DE CAJA UNA PETICION PARA GUARDAR EL EGRESO 
      var url ="http://localhost/gestor-LS-master/ajax/caja.php?op=nuevoegreso";
      var monto = $('#egreso_m').val();
      var detalle = $('#egreso_d').val();
      var dataString = "monto="+monto+"&detalle="+detalle;
      $.ajax({
        type: "POST",
        url: url,
        data: dataString,
        success: function(data) {
          if(data == "1"){
              Swal.fire({
              position: "center",
              type: "success",
              title: "Respuesta:",
              text: "Añadido correctamente",
              showConfirmButton: false,
              timer: 1500
              });
          var contenido2 = "<tr class='table-info'><th scope='row'>-</th><td>"+detalle+"</td><td>"+monto+"</td></tr>";
          $('#tablaegresos').append(contenido2);
          setTimeout("window.location='IECaja.php'", 2000 );
          }else{
              Swal.fire({
              position: "center",
              type: "error",
              title: "Hubo un error al añadir el egreso",
              text: data,
              showConfirmButton: false,
              timer: 1500
              });
          }
        }
      });
    }
  });
});
