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
      var url =
        "http://localhost/PlantillaLasalle/ajax/socio.php?op=guardaryeditar";
      $.ajax({
        type: "POST",
        url: url,
        data: $("#form1").serialize(),
        success: function(data) {
          Swal.fire({
            position: "center",
            type: "success",
            title: "Respuesta:",
            val: data,
            showConfirmButton: false,
            timer: 4000
          });
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
      var url =
        "http://localhost/PlantillaLasalle/ajax/socio.php?op=guardaryeditar";
      $.ajax({
        type: "POST",
        url: url,
        data: $("#form1").serialize(),
        success: function(data) {
          Swal.fire({
            position: "center",
            type: "success",
            title: "Respuesta:",
            val: data,
            showConfirmButton: false,
            timer: 4000
          });
        }
      });
    }
  });
});
