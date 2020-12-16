$(".card-grid").flip({
	trigger: "manual",
});

$("#corpo").show();
$("#carouselExampleIndicators").on("slide.bs.carousel", function (e) {
	switch (e.to) {
		case 0:
			$("#corpo").show();
			$("#edu").hide();
			$("#ind").hide();
			break;

		case 1:
			$("#corpo").hide();
			$("#edu").show();
			$("#ind").hide();
			break;

		case 2:
			$("#corpo").hide();
			$("#edu").hide();
			$("#ind").show();
			break;

		default:
			break;
	}
});

$(".cta").on("click", function () {
	if ($(window).width() < 768) {
		$("html, body").animate(
			{
				scrollTop: $("#form-movil").offset().top,
			},
			2000,
			function () {
				$("#form-movil").find("#nombre").focus();
			}
		);
	} else {
		$("html, body").animate(
			{
				scrollTop: 0,
			},
			2000,
			function () {
				$("#form").find("#nombre").focus();
			}
		);
	}
});

if ($(window).width() < 768) {
	$(".flip").click(function () {
		$(this).closest(".card-grid").flip(true);
	});
	$(".unflip").click(function () {
		$(this).closest(".card-grid").flip(false);
	});
	const sp = document.querySelector("#super");
	const options = {
		// rootMargin:
		threshold: 1,
	};

	function callback(entries, observer) {
		if (entries[0].isIntersecting) {
			$("#first").closest(".card-grid").flip(true);
			console.log("arre");
		} else {
			$("#first").closest(".card-grid").flip(false);
		}
	}

	const observer = new IntersectionObserver(callback, options);
	observer.observe(sp);
} else {
	$(".flip").mouseover(function () {
		$(this).closest(".card-grid").flip(true);
	});

	$(".unflip").mouseleave(function () {
		$(this).closest(".card-grid").flip(false);
	});
}
