jQuery(document).ready(function($) {
    // $('#nav a').last().addClass('last');
    $('.filter').click(function(event) {
        $('.filter').removeClass("active");
        $(this).addClass("active");

        var name = $(event.target).data('filter');
        console.log(event.target);
        
        // if(name == 'all') {
        //     $('.postings').css({ 'display': '' });
        // } else {
        //     var categories = $("[data-category]")
        //         .filter();
        //     console.log(categories);
        //     var newArray = [];
        //     for(var i = 0; i < categories.length; i++) {
        //         if(categories[i].dataset['category'] !== name) {
        //             newArray.push(categories[i]);
        //         }
        //     }
            
        //     newArray.css({ 'display': 'none' })
        // }

    })
  })

  function onFilter(event) {
    var name = event.dataset.filter;
    var el = document.querySelectorAll('[data-category]');
    for (var i = 0; i < el.length; i++) {
        el[i].classList.remove('invisible')
    }

    if(name == 'all') {
        return;
    }

    for (var i = 0; i < el.length; i++) {
        if(el[i].dataset.category != name) {
            el[i].classList.add('invisible');
        }
    }
  }


