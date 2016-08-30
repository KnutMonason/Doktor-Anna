$(document).ready(function () {

    $('.menu-trigger').click(function () {
return $(this).toggleClass('active');

    });

}.call(this));


$('.menu-trigger').click(function () {
  $('#menu-open') .toggle('fast');
});
