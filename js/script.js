// ==========================================================================
// ARCHIVO: js/script.js
// Lógica de cliente en JavaScript para el portal educativo UAEMéx
// Requisitos: Lógica secuencial y plana, sin funciones nombradas ni clases
// ==========================================================================

// Selección de elementos para el giro de tarjetas en la página de inicio
var tarjeta1 = document.getElementById("tarjeta-1");
if (tarjeta1) {
    tarjeta1.addEventListener("click", function () {
        this.classList.toggle("girada");
    });
}

var tarjeta2 = document.getElementById("tarjeta-2");
if (tarjeta2) {
    tarjeta2.addEventListener("click", function () {
        this.classList.toggle("girada");
    });
}

var tarjeta3 = document.getElementById("tarjeta-3");
if (tarjeta3) {
    tarjeta3.addEventListener("click", function () {
        this.classList.toggle("girada");
    });
}

// Selección de radios para alternar temáticas en la página del crucigrama
var radioFrutas = document.getElementById("radio-frutas");
var radioValores = document.getElementById("radio-valores");
var radioPersonajes = document.getElementById("radio-personajes");

var panelFrutas = document.getElementById("panel-frutas");
var panelValores = document.getElementById("panel-valores");
var panelPersonajes = document.getElementById("panel-personajes");

if (radioFrutas && panelFrutas && panelValores && panelPersonajes) {
    radioFrutas.addEventListener("change", function () {
        panelFrutas.style.display = "block";
        panelValores.style.display = "none";
        panelPersonajes.style.display = "none";
    });
}

if (radioValores && panelFrutas && panelValores && panelPersonajes) {
    radioValores.addEventListener("change", function () {
        panelFrutas.style.display = "none";
        panelValores.style.display = "block";
        panelPersonajes.style.display = "none";
    });
}

if (radioPersonajes && panelFrutas && panelValores && panelPersonajes) {
    radioPersonajes.addEventListener("change", function () {
        panelFrutas.style.display = "none";
        panelValores.style.display = "none";
        panelPersonajes.style.display = "block";
    });
}

// Selección de formulario y contenedor de respuesta
var formularioCrucigrama = document.getElementById("form-crucigrama");
var contenedorResultado = document.getElementById("resultado");

// Captura de envío del formulario y ejecución directa de petición fetch a php/servidor.php
if (formularioCrucigrama) {
    formularioCrucigrama.addEventListener("submit", function (evento) {
        evento.preventDefault();

        // Aviso temporal en el contenedor de resultados
        if (contenedorResultado) {
            contenedorResultado.innerHTML = "<p style='text-align:center; color:#004A2F; font-weight:bold;'>Verificando respuestas en el servidor institucional...</p>";
        }

        // Recolección secuencial de los datos ingresados
        var datosFormulario = new FormData(formularioCrucigrama);

        // Envío directo mediante fetch hacia php/servidor.php
        fetch("php/servidor.php", {
            method: "POST",
            body: datosFormulario
        })
        .then(function (respuesta) {
            return respuesta.text();
        })
        .then(function (contenidoRespuesta) {
            // Asignación directa de la respuesta del servidor al contenedor en pantalla
            if (contenedorResultado) {
                contenedorResultado.innerHTML = contenidoRespuesta;
            }
        })
        .catch(function (error) {
            // Manejo directo de fallas de conexión
            if (contenedorResultado) {
                contenedorResultado.innerText = "Error al comunicarse con el servidor PHP.";
            }
        });
    });
}
