jQuery(document).ready(function ($) {

    var $cards = $('.team-member');
  
    $cards.on('click', function (e) {
        e.preventDefault();
        // console.log(e);
        var $this = $(this);
        
        let bio = $this.find('.team-member__bio');
        
        $this.toggleClass( 'selected' );
        
        let cta = $this.find('.cta span');
        let cta_icon = $this.find('.cta .icon');
        if($this.hasClass('selected')) {
            $('.overlay').fadeIn(100);
            bio.addClass( 'expanded' );
            cta.text('Close Details')
            cta_icon.removeClass('fas fa-plus')
            cta_icon.addClass('fas fa-times')
        } else {
            $('.overlay').fadeOut(100);
            bio.removeClass('expanded');
            $this.find('.cta span').text('View Details')
            cta_icon.removeClass('fas fa-times')
            cta_icon.addClass('fas fa-plus')
        }
    });

    $('.overlay').on("click", function(event){
        var $this = $(this);
        let card = $('.team-member').removeClass('selected');
        $('.team-member__bio').removeClass('expanded');
        let cta = card.find('.cta span')
        let cta_icon = card.find('.cta .icon')
        cta.text('View Details')
        cta_icon.removeClass('fas fa-times')
        cta_icon.addClass('fas fa-plus')
        $this.fadeOut(100);
    });
  
  })
  