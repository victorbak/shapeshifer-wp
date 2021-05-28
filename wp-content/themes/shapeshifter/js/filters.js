jQuery(document).ready(function ($) {

  var $filters = $('.filter'),
    $postings = $('.postings');

  $filters.on('click', function (e) {
    e.preventDefault();
    var $this = $(this);

    $filters.removeClass('active');
    $this.addClass('active');

    var $filterCategory = $this.attr('data-filter');
    var $filterButtonText = $('#deptFilterText');

    if ($filterCategory == 'all') {
      $filterButtonText.html('Filter by department');
      $postings.removeClass('is-animated')
        .fadeOut(100).promise().done(function () {
          $postings.fadeIn(150);
        });
    } else {
      $filterButtonText.html($this.attr('data-name'));
      $postings.removeClass('is-animated')
        .fadeOut(100).promise().done(function () {
          $postings.filter('[data-category = "' + $filterCategory + '"]').fadeIn(150);
        });
    }
  });
})
  