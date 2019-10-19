var datos = 0;
var cuenta = 0;
var menor = 0;

//e.preventDefault(); //No se activará la acción predeterminada del evento

$(btnGuardar).click(function(e) {
  e.preventDefault();
  data = $("#form1").serialize();
  console.log(data);

  var validoGeneral = true;

  if ($("#medio_de_pago").val() === "Debito") {
    if (bloque3() !== 1) {
      validoGeneral = false;
    }
  }

  if ($("#categoria_s").val() === "Menor") {
    if (bloque2() !== 1) {
      validoGeneral = false;
    }
  }

  if (bloque1() !== 1) {
    validoGeneral = false;
    Swal.fire({
      type: "error",
      title: "Oops...",
      text: "COMPLETE LOS DATOS !!",
      showConfirmButton: false,
      timer: 2500
    });
  }

  if (validoGeneral === true) {
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
          title: `<i class="zmdi zmdi-rotate-right zmdi-hc-spin"></i>`,
          val: data,
          showConfirmButton: false,
          timer: 4000
        });
      }
    });
    //limpia bloque 1
    $("#nro_s").val("");
    $("#cuil_s").val("");
    $("#apellido_s").val("");
    $("#nombre_s").val("");
    $("#sexo_s").val("");
    $("#f_nac_s").val("");
    $("#domicilio_s").val("");
    $("#ciudad_s").val("");
    $("#cpostal_s").val("");
    $("#nro_celular_s").val("");
    $("#nro_tel_s").val("");
    $("#email_s").val("");
    $("#obra_social_s").val("");
    $("#division_s").val("");
    $("#becado_s").val("");
    $("#ficha_s").val("");
    $("#carnet_s").val("");
    $("#fichadoUAR_s").val("");
    $("#f_alta_s").val("");
    $("#medio_de_pago").val("");
    $("#categoria_s").val("");
    //limpia bloque 2
    $("#r_dni").val("");
    $("#r_cuil").val("");
    $("#r_apellido").val("");
    $("#r_nombre").val("");
    $("#r_f_nac_s").val("");
    $("#r_sexo").val("");
    $("#r_domicilio").val("");
    $("#r_ciudad").val("");
    $("#r_cpostal").val("");
    $("#r_celular").val("");
    $("#r_telefono").val("");
    $("#r_email").val("");
    //limpia bloque 3
    $("#c_nombre").val("");
    $("#c_apellido").val("");
    $("#tipo_cuenta_s").val("");
    $("#c_cuil").val("");
    $("#c_numerocuenta").val("");
    $("#c_cbu").val("");
    $("#c_banco").val("");
    $("#c_sucursal").val("");
  }
});

function bloque1() {
  datos = 0;
  if ($("#nro_s").val() === "" || $("#nro_s").val().length <= 5) {
    $("#nro_s").val("");
    $("#nro_s").focus();
  } else if ($("#cuil_s").val() === "" || $("#cuil_s").val().length <= 9) {
    $("#cuil_s").val("");
    $("#cuil_s").focus();
  } else if ($("#apellido_s").val() === "") {
    $("#apellido_s").val("");
    $("#apellido_s").focus();
  } else if ($("#nombre_s").val() === "") {
    $("#nombre_s").val("");
    $("#nombre_s").focus();
  } else if ($("#f_nac_s").val() === "") {
    $("#f_nac_s").val("");
    $("#f_nac_s").focus();
  } else if ($("#sexo_s").val() === "null") {
    $("#sexo_s").focus();
  } else if (
    //datos contacto
    $("#domicilio_s").val() === ""
  ) {
    $("#domicilio_s").focus();
    $("#domicilio_s").val("");
  } else if ($("#ciudad_s").val() === "") {
    $("#ciudad_s").focus();
    $("#ciudad_s").val("");
  } else if (
    $("#cpostal_s").val() === "" ||
    $("#cpostal_s").val().length <= 3
  ) {
    $("#cpostal_s").val("");
    $("#cpostal_s").focus();
  } else if ($("#nro_celular_s").val() === "") {
    $("#nro_celular_s").focus();
    $("#nro_celular_s").val("");
  } else if ($("#nro_tel_s").val() === "") {
    $("#nro_tel_s").focus();
    $("#nro_tel_s").val("");
  } else if (
    $("#email_s").val() === "" ||
    $("#email_s")
      .val()
      .indexOf("@", 0) === -1
  ) {
    console.log($("#email_s").val());
    $("#email_s").val("");
    $("#email_s").focus();
  } else if ($("#obra_social_s").val() === "") {
    $("#obra_social_s").val("");
    $("#obra_social_s").focus();
    //datos generales
  } else if ($("#division_s").val() === "") {
    $("#division_s").val("");
    $("#division_s").focus();
  } else if ($("#f_alta_s").val() === "") {
    $("#f_alta_s").focus();
  } else if ($("#fichadoUAR_s").val() === "") {
    $("#fichadoUAR_s").focus();
  } else if ($("#carnet_s").val() === "null") {
    $("#carnet_s").focus();
  } else if ($("#ficha_s").val() === "null") {
    $("#ficha_s").focus();
  } else if ($("#becado_s").val() === "null") {
    $("#becado_s").focus();
  } else if ($("#medio_de_pago").val() === "null") {
    $("#medio_de_pago").focus();
  } else if ($("#categoria_s").val() === "null") {
    $("#categoria_s").focus();
  } else {
    datos = 1;
  }
  return datos;
}

function bloque2() {
  menor = 0;
  if ($("#r_dni").val() === "" || $("#r_dni").val().length <= 5) {
    $("#r_dni").val("");
    $("#r_dni").focus();
  } else if ($("#r_cuil").val() === "" || $("#r_cuil").val().length <= 9) {
    $("#r_cuil").val("");
    $("#r_cuil").focus();
  } else if ($("#r_apellido").val() === "") {
    $("#r_apellido").val("");
    $("#r_apellido").focus();
  } else if ($("#r_nombre").val() === "") {
    $("#r_nombre").val("");
    $("#r_nombre").focus();
  } else if ($("#r_f_nac_s").val() === "") {
    $("#r_f_nac_s").val("");
    $("#r_f_nac_s").focus();
  } else if ($("#r_sexo").val() === "null") {
    $("#r_sexo").val("");
    $("#r_sexo").focus();
  } //datos contacto
  else if (
    $("#r_domicilio").val() === "" ||
    $("#r_domicilio").val.length <= 5
  ) {
    $("#r_domicilio").val("");
    $("#r_domicilio").focus();
  } else if ($("#r_ciudad").val() === "") {
    $("#r_ciudad").val("");
    $("#r_ciudad").focus();
  } else if (
    $("#r_cpostal").val() === "" ||
    $("#r_cpostal").val().length <= 3
  ) {
    $("#r_cpostal").val("");
    $("#r_cpostal").focus();
  } else if ($("#r_celular").val() === "" || $("#r_celular").val.length <= 9) {
    $("#r_celular").val("");
    $("#r_celular").focus();
  } else if (
    $("#r_telefono").val() === "" ||
    $("#r_telefono").val.length <= 9
  ) {
    $("#r_telefono").val("");
    $("#r_telefono").focus();
  } else if (
    $("#r_email").val() === "" ||
    $("#r_email")
      .val()
      .indexOf("@", 0) === -1
  ) {
    $("#r_email").val("");
    $("#r_email").focus();
  } else {
    menor = 1;
  }
  return menor;
}

function bloque3() {
  cuenta = 0;
  if ($("#c_nombre").val() === "") {
    $("#c_nombre").focus();
  } else if ($("#c_apellido").val() === "") {
    $("#c_apellido").focus();
  } else if ($("#tipo_cuenta_s").val() === "null") {
    $("#tipo_cuenta_s").focus();
  } else if ($("#c_cuil").val() === "") {
    $("#c_cuil").focus();
  } else if ($("#c_numerocuenta").val() === "") {
    $("#c_numerocuenta").focus();
  } else if ($("#c_cbu").val() === "") {
    $("#c_cbu").focus();
  } else if ($("#c_banco").val() === "") {
    $("#c_banco").focus();
  } else if ($("#c_sucursal").val() === "") {
    $("#c_sucursal").focus();
  } else {
    cuenta = 1;
  }
  return cuenta;
}
