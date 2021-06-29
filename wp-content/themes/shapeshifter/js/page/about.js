jQuery(document).ready(function ($) {

    var $cards = $('.team-member');

    $('.team-member__contact-info-item').on('click', function (event) {
      event.stopPropagation();
    });
  
    $cards.on('click', function (e) {
        e.preventDefault();
        // console.log(e);
        var $this = $(this);
        var originalHeight = $this.outerHeight();
        var cardParent = $this.parent();

        let bio = $this.find('.team-member__bio');
        
        $this.toggleClass( 'selected' );
        
        let cta = $this.find('.cta span');
        let cta_icon = $this.find('.cta .icon');
        if($this.hasClass('selected')) {
            $('.overlay').fadeIn(100);
            cardParent.height(originalHeight);
            $this.attr('aria-expanded', 'true');
            bio.attr('aria-hidden', 'false');
            bio.addClass( 'expanded' );
            cta.text('Close Details')
            cta_icon.removeClass('fas fa-plus')
            cta_icon.addClass('fas fa-times')
        } else {
            $('.overlay').fadeOut(0);
            $this.attr('aria-expanded', 'false');
            bio.attr('aria-hidden', 'true');
            bio.removeClass('expanded');
            cardParent.height('100%');
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
        $this.fadeOut(0);
    });
  
  })
  