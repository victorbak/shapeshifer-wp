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
    console.log(name);
    var el = document.querySelectorAll('[data-category]');
    console.log(el);
    for (var i = 0; i < el.length; i++) {
        el[i].style.display = '';
    }

    if(name == 'all') {
        return;
    }
    
    for (var i = 0; i < el.length; i++) {
        if(el[i].dataset.category != name) {
            el[i].style.display = 'none';
        }
    }
  }


