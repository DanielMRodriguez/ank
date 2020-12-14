$('.card-grid').flip({
  trigger: 'manual',
});

$('.flip').mouseover(function () {
  $(this).closest('.card-grid').flip(true);
});

$('.unflip').mouseleave(function () {
  $(this).closest('.card-grid').flip(false);
});

$(window).on('click', function (e) {
  console.log(e.target);
});

$('#corpo').show();
$('#carouselExampleIndicators').on('slide.bs.carousel', function (e) {
  switch (e.to) {
    case 0:
      $('#corpo').show();
      $('#edu').hide();
      $('#ind').hide();
      break;

    case 1:
      $('#corpo').hide();
      $('#edu').show();
      $('#ind').hide();
      break;

    case 2:
      $('#corpo').hide();
      $('#edu').hide();
      $('#ind').show();
      break;

    default:
      break;
  }
});
