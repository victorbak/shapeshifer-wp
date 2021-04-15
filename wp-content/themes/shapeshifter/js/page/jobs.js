jQuery(document).ready(function($) {
    // $('#nav a').last().addClass('last');
    $('.filter').click(function(event) {
        $('.filter').removeClass("active");
        $(this).addClass("active");

        var name = $(event.target).data('filter');

    })

  })

    setFilter = 'all';
    function onFilter(event) {
        filterName = event.dataset.filter;
        if(setFilter == filterName) { return; }
        var el = document.querySelectorAll('[data-category]');
        for (var i = 0; i < el.length; i++) {
            // Need to not fade out every timea
            el[i].classList.add('fade-out');
            el[i].addEventListener('animationend', removeFadeOut);

            if (el[i].dataset['category'] == filterName || filterName == 'all' ) {

                el[i].classList.add('fade-in');
                el[i].addEventListener('animationend', removeFadeIn);

                if(el[i].classList.contains('hidden')) {
                    el[i].classList.remove('hidden');
                }
            } else {
                el[i].classList.add('hidden');
            }

        }
        setFilter = filterName;
    }

    function removeFadeOut(e) {
        e.target.classList.remove('fade-out');
        e.target.removeEventListener('animationend', removeFadeOut);
    }

    function removeFadeIn(e) {
        e.target.classList.remove('fade-in');
        e.target.removeEventListener('animationend', removeFadeIn);
    }


