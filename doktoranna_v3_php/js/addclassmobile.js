var selectormobile = '#menu-mobile a';

$(selectormobile).on('click', function(){
    $(selectormobile).removeClass('currentmobile');
    $(this).addClass('currentmobile');
});
