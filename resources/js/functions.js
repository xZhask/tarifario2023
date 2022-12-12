const inputIpress = document.querySelector("#ipress");
const inputProcedimiento = document.querySelector("#procedimiento");
let nivelIpress;

window.addEventListener("load", async () => {
  const datos = new FormData();
  datos.append("accion", "LISTAR_UNIDADES");
  const cargarUnidades = await postData(datos);
  const unidadesList = cargarUnidades.map((unidad) => unidad.nombre);

  CargarAutocompletado(unidadesList, cargarUnidades);

  const contLoader = document.querySelector(".preloader");
  contLoader.style.opacity = 0;
  contLoader.style.visibility = "hidden";
});

async function postData(data) {
  const response = await fetch("App/controller/controller.php", {
    method: "POST",
    body: data,
  }).then((res) => res.json());
  return await response;
}
async function CargarAutocompletado(list, unidades) {
  $("#ipress").autocomplete({
    source: list,
    select: (e, item) => {
      let unidad = item.item.value;
      let position = list.indexOf(unidad);
      nivelIpress = unidades[position].nivel;
    },
  });
}
/*
$(document).ready(async function () {
  $("#ipress").autocomplete({
    source: await unidadesList,
    select: (e, item) => {
      let unidad = item.item.value;
      let position = unidadesList.indexOf(unidad);
      nivel = cargarUnidades[position].nivel;
      txtProcedimiento.value = "";
      let data = {
        accion: `LISTAR_PROCEDIMIENTOS`,
        nvlipress: nivel,
      };
      let rptaAjax = ajaxFunction(data);
      $("#tbcpt").html(rptaAjax);
      $(".bg-dark").css("display", "none");
      document.getElementById("ipress").blur();
      $("#btnExcel").prop(
        "href",
        `resources/libraries/Excel/tarifario.php?nvl=${nivel}`
      );
    }, 
  });
});
/* 
function ajaxFunction(data) {
  let resultado;
  $.ajax({
    type: "POST",
    url: "App/controller/controller.php",
    data: data,
    async: false,
    error: () => {
      alert("Error occured");
    },
    success: (respuesta) => {
      resultado = respuesta;
    },
  });
  return resultado;
}*/

/*
function FiltrarProcedimientos() {
  let filtro = $("#procedimiento").val();
  let data = {
    accion: `FILTRAR_PROCEDIMIENTOS`,
    nvlipress: nivel,
    filtro: filtro,
  };
  let rptaAjax = ajaxFunction(data);
  $("#tbcpt").html(rptaAjax);
}
posicionarBuscador();

$(window).scroll(function () {
  posicionarBuscador();
});

function posicionarBuscador() {
  var alturaHeader = $("header").outerHeight(true);
  if ($(window).scrollTop() >= alturaHeader) {
    $(".cont-search").addClass("fixed");
    $(".cont-table").css("margin-top", "135px");
  } else {
    $(".cont-search").removeClass("fixed");
    $(".cont-table").css("margin-top", "0");
  }
}
 */
