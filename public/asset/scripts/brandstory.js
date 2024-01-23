var $container = jQuery('.card-grid');

$container.masonry({

  columnWidth: '.card',
  fitWidth: true,
  itemSelector: '.card',
  horizontalOrder: true,
  gutter: 2

});

$(".collapse").on('show.bs.collapse', function () {
  setTimeout(function () {
    $container.masonry('layout');
  }, 0);
});
$(".collapse").on('shown.bs.collapse', function () {
  setTimeout(function () {
    $container.masonry('layout');
  }, 0);
});

$(".collapse").on('hidden.bs.collapse', function () {
  setTimeout(function () {
    $container.masonry('layout');
  }, 0);
});



