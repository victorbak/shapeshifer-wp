jQuery(document).ready(function ($) {

    var $cards = $('.team-member');

    $('.overlay').on("click", function(event){
        var $this = $(this);
        $('.team-member__bio').removeClass('expanded');
        $('.team-member').removeClass('selected');
        $this.fadeOut(100);
    });
  
    $cards.on('click', function (e) {
        e.preventDefault();
        console.log(e);
        var $this = $(this);
        
        let bio = $this.find('.team-member__bio');
        console.log(bio);
        
        $this.toggleClass( 'selected' );
        
        if($this.hasClass('selected')) {
            $('.overlay').fadeIn(100);
            bio.addClass( 'expanded' );
        } else {
            $('.overlay').fadeOut(100);
            bio.removeClass('expanded');
        }
        

        // $(".overlay").fadeIn(500);

    //   $filters.removeClass('active');
    //   $this.addClass('active');
  
    //   var $filterCategory = $this.attr('data-filter');
  
    //   if ($filterCategory == 'all') {
    //     $postings.removeClass('is-animated')
    //       .fadeOut(100).promise().done(function () {
    //         $postings.fadeIn(100);
    //       });
    //   } else {
    //     $postings.removeClass('is-animated')
    //       .fadeOut(100).promise().done(function () {
    //         $postings.filter('[data-category = "' + $filterCategory + '"]').fadeIn(100);
    //       });
    //   }
    });
  
  })
  