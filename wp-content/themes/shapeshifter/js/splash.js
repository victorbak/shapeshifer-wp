function splash(param) {
    console.log('here')
    var time = param;
    setTimeout(function () {
        $('#splashscreen').hide();
    }, time);
}