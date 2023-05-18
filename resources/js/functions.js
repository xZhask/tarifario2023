const inputIpress = document.querySelector("#ipress");
const inputProcedimiento = document.querySelector("#procedimiento");
const tbTarifario = document.querySelector("#tbCpms");
const contLoader = document.querySelector(".preloader");

let nivelIpress;
let tarifario = [];

window.addEventListener("load", async () => {
  contLoader.style.opacity = 0;
  contLoader.style.visibility = "hidden";

  const datos = new FormData();
  datos.append("accion", "LISTAR_UNIDADES");
  const cargarUnidades = await postData(datos);
  const unidadesList = cargarUnidades.map((unidad) => unidad.nombreIpress);
  console.log(cargarUnidades);
  CargarAutocompletado(unidadesList, cargarUnidades);
});

async function postData(data) {
  const response = await fetch("App/controller/controller.php", {
    method: "POST",
    body: data,
  }).then((res) => res.json());
  return await response;
}
function CargarAutocompletado(list, unidades) {
  $("#ipress").autocomplete({
    source: list,
    select: (e, item) => {
      let unidad = item.item.value;
      let position = list.indexOf(unidad);
      nivelIpress = unidades[position].nivel;
      cargarTarifario(nivelIpress);
    },
  });
}
async function cargarTarifario(nivel) {
  let datos = new FormData();
  datos.append("accion", "CARGAR_TARIFARIO");
  datos.append("nivelIpress", nivel);
  tarifario = await postData(datos);
  renderTabla(tarifario);
}

const crearFilasTabla = (tarifario) =>
  tarifario
    .map(
      (procedimiento, indice) =>
        `<tr><td>${indice + 1}</td><td>${procedimiento.codigoCpms}</td><td>${
          procedimiento.descripcion
        }</td><td>S/.${procedimiento.precio}</td></tr>`
    )
    .join("");

function renderTabla(tarifario) {
  const filasString = crearFilasTabla(tarifario);
  tbTarifario.innerHTML = filasString;
  $(".bg-dark").css("display", "none");
  $("#btnExcel").prop(
    "href",
    `resources/libraries/Excel/tarifario.php?nvl=${nivelIpress}`
  );
}
inputProcedimiento.addEventListener("keyup", (e) => {
  const nuevaTabla = tarifario.filter((procedimiento) =>
    `${procedimiento.descripcion.toLowerCase()} ${procedimiento.codigoCpms.toLowerCase()}`.includes(
      inputProcedimiento.value.toLowerCase()
    )
  );
  renderTabla(nuevaTabla);
});
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
