$('div').on('click', function (e) {
  e.preventDefault();
  e.stopPropagation();

  $(this).toggleClass('btn-default').toggleClass('btn-success');
});
