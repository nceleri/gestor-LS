$(document).ready(function() {
  $(".btn-sideBar-SubMenu").on("click", function() {
    var SubMenu = $(this).next("ul");
    var iconBtn = $(this).children(".zmdi-caret-down");
    if (SubMenu.hasClass("show-sideBar-SubMenu")) {
      iconBtn.removeClass("zmdi-hc-rotate-180");
      SubMenu.removeClass("show-sideBar-SubMenu");
    } else {
      iconBtn.addClass("zmdi-hc-rotate-180");
      SubMenu.addClass("show-sideBar-SubMenu");
    }
  });
  $(".btn-exit-system").on("click", function() {
    swal({
      title: "Are you sure?",
      text: "The current session will be closed",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#03A9F4",
      cancelButtonColor: "#F44336",
      confirmButtonText: '<i class="zmdi zmdi-run"></i> Yes, Exit!',
      cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancel!'
    }).then(function() {
      window.location.href = "index.html";
    });
  });
  $(".btn-menu-dashboard").on("click", function() {
    var body = $(".dashboard-contentPage");
    var sidebar = $(".dashboard-sideBar");
    if (sidebar.css("pointer-events") == "none") {
      body.removeClass("no-paddin-left");
      sidebar.removeClass("hide-sidebar").addClass("show-sidebar");
    } else {
      body.addClass("no-paddin-left");
      sidebar.addClass("hide-sidebar").removeClass("show-sidebar");
    }
  });
  $(".btn-Notifications-area").on("click", function() {
    var NotificationsArea = $(".Notifications-area");
    if (NotificationsArea.css("opacity") == "0") {
      NotificationsArea.addClass("show-Notification-area");
    } else {
      NotificationsArea.removeClass("show-Notification-area");
    }
  });
  $(".btn-search").on("click", function() {
    swal({
      title: "What are you looking for?",
      confirmButtonText: '<i class="zmdi zmdi-search"></i>  Search',
      confirmButtonColor: "#03A9F4",
      showCancelButton: true,
      cancelButtonColor: "#F44336",
      cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> Cancel',
      html:
        '<div class="form-group label-floating">' +
        '<label class="control-label" for="InputSearch">write here</label>' +
        '<input class="form-control" id="InputSearch" type="text">' +
        "</div>"
    }).then(function() {
      swal("You wrote", "" + $("#InputSearch").val() + "", "success");
    });
  });
  $(".btn-modal-help").on("click", function() {
    $("#Dialog-Help").modal("show");
  });

  // -------------------mostrar responsable
  $("#responsable").hide();

$("#categoria_s").change(function(){
  var categoria = $("#categoria_s").val();
  if (categoria == 'Menor') {
    $("#responsable").show();
  }else{
    $("#responsable").hide();
  }
})

/*
  let ra = document.getElementById("radioResponsable");
  function mostrarRe() {
    $("#responsable").show();
  }
  ra.onclick = mostrarRe;

  let re = document.querySelectorAll("#radio");
  function mostrarNo() {
    $("#responsable").hide();
  }
  for (var i = 0; i < re.length; i++) {
    re[i].onclick = mostrarNo;
  }
*/
  // ---------------------------mostrar debito
  $("#debito").hide();

  $("#medio_de_pago").change(function(){
    var mp= $("#medio_de_pago").val();
    if (mp == 'Debito') {
      $("#debito").show();
    }else{
        $("#debito").hide();
    }
  })

  let rn = document.querySelectorAll("#radioD");
  function nomostrardb() {
    $("#debito").hide();
  }
  for (var i = 0; i < rn.length; i++) {
    rn[i].onclick = nomostrardb;
  }
  // let deS = document.getElementsByName("radioPago");
  // for (var e = 0; e < deS.length; e++) {
  //   var n = deS[e].getAttribute("value");
  //   deS[e].addEventListener("click", evalua);
  // }
  // function evalua() {
  //   console.log("llegooo");
  //   console.log(n);
  // }
  // function mostrarBB() {
  //   $("#debito").show();
  // }
  // function mostrarBBN() {
  //   $("#debito").hide();
  // }

  //   --------------------------mostrar titular
  $("#titular").hide();

  let titular = document.getElementById("esTitular");

  //titular.onclick = estitular;

  function estitular() {
    $("#titular").hide();
  }

  let ntitular = document.getElementById("noTitular");

  //ntitular.onclick = nestitular;

  function nestitular() {
    $("#titular").show();
  }


});

(function($) {
  $(window).on("load", function() {
    $(".dashboard-sideBar-ct").mCustomScrollbar({
      theme: "light-thin",
      scrollbarPosition: "inside",
      autoHideScrollbar: true,
      scrollButtons: { enable: true }
    });
    $(".dashboard-contentPage, .Notifications-body").mCustomScrollbar({
      theme: "dark-thin",
      scrollbarPosition: "inside",
      autoHideScrollbar: true,
      scrollButtons: { enable: true }
    });
  });
})(jQuery);
