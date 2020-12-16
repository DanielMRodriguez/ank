$(function () {
	$("form #telefono")
		.keypress(function (e) {
			if (isNaN(this.value + String.fromCharCode(e.charCode))) return false;
		})
		.on("cut copy paste", function (e) {
			e.preventDefault();
		});
	/*----- Habilitar boton solamente cuando este validado el formulario--*/
	$("form").on("change keyup", function () {
		var form = $(this);
		var btn = form.find("#enviar");
		let btnM = $("#enviar-m");

		if (validarFormulario(form)) {
			btn.attr("disabled", false);
			console.log("habilitado");
			btnM.attr("disabled", false);
		} else {
			btn.attr("disabled", true);
			btnM.attr("disabled", true);
			console.log("deshabilitado");
		}
	});

	var validarFormulario = function (form) {
		form.validate({
			rules: {
				nombre: { required: true },
				telefono: {
					required: true,
					digits: true,
					minlength: 10,
					maxlength: 16,
				},
				correo: { required: true, email: true },
				empresaSize: { required: true },
			},
			messages: {
				nombre: { required: "El campo es obligatorio" },
				correo: {
					required: "El campo es obligatorio",
					email: "Ingresa un email válido",
				},
				telefono: {
					required: "El campo es obligatorio",
					digits: "Ingresa números solamente",
					minlength: "Mí­nimo {0} dígitos",
					maxlength: "Máximo {0} dí­gitos",
				},
				empresaSize: {
					required: "Esta campo es obligatorio",
				},
			},
		});

		return form.valid();
	};

	$("form")
		.find("#enviar")
		.click(function (e) {
			let el = $(this);
			let form = $("#" + el[0].dataset.form);

			if (validarFormulario(form)) {
				$("#loader-page").removeClass("d-none");
				$("#loader-page").addClass("d-flex");
				$("#enviar").attr("disabled", "true");

				form.submit();
			} else {
			}
		});
});

/* OBTENER UTMS/**/

var obtener_utms = function (datos) {
	var utms = [
		"utm_source",
		"utm_medium",
		"utm_campaign",
		"utm_term",
		"utm_content",
	];
	for (utm of utms) {
		datos[utm] = getParameterByName(utm);
	}

	return datos;
};

function getParameterByName(name) {
	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		results = regex.exec(location.search);
	return results === null
		? "null"
		: decodeURIComponent(results[1].replace(/\+/g, " "));
}

var utms = [
	"utm_source",
	"utm_medium",
	"utm_campaign",
	"utm_term",
	"utm_content",
];

var utmFormulario = function () {
	let datos = {};
	datos = obtener_utms(datos);

	document.getElementById("utm_source").value = datos["utm_source"];
	document.getElementById("utm_content").value = datos["utm_content"];
	document.getElementById("utm_campaign").value = datos["utm_campaign"];
	document.getElementById("utm_term").value = datos["utm_term"];
	document.getElementById("utm_medium").value = datos["utm_medium"];

	document.getElementById("utm_source-m").value = datos["utm_source"];
	document.getElementById("utm_content-m").value = datos["utm_content"];
	document.getElementById("utm_campaign-m").value = datos["utm_campaign"];
	document.getElementById("utm_term-m").value = datos["utm_term"];
	document.getElementById("utm_medium-m").value = datos["utm_medium"];

	console.log(datos);
};

utmFormulario();
