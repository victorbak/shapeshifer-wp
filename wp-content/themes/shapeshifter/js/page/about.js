jQuery(document).ready(function ($) {

    var $expand_buttons = $('.expander');
  
    $expand_buttons.on('click', function (e) {
        e.preventDefault();
        // console.log(e);
        var $this = $(this);
        var $card = $(this).closest('.team-member');
        var originalHeight = $card.outerHeight();
        var cardParent = $card.parent();

        let bio = $card.find('.team-member__bio');
        
        $card.toggleClass( 'selected' );
        
        let cta = $card.find('.cta span');
        let cta_icon = $card.find('.cta .icon');
        if($card.hasClass('selected')) {
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
            $card.find('.cta span').text('View Details')
            cta_icon.removeClass('fas fa-times')
            cta_icon.addClass('fas fa-plus')
        }
    });

    $('.overlay').on("click", function(event){
        var $this = $(this);
        let card = $('.team-member');
        var cardParent = card.parent();
        let cta = card.find('.cta span');
        let cta_icon = card.find('.cta .icon')
        var button = card.find('.cta');
        
        button.attr('aria-expanded', 'false');
        card.removeClass('selected');
        $('.team-member__bio').attr('aria-hidden', 'true');
        $('.team-member__bio').removeClass('expanded');
        cardParent.height('100%');

        cta_icon.removeClass('fas fa-times')
        cta_icon.addClass('fas fa-plus')
        cta.text('View Details')
        $this.fadeOut(0);
    });
  
  })
  