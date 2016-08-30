var selector = '.selector a';

$(selector).on('click', function(){
    $(selector).removeClass('current');
    $(this).addClass('current');
});
