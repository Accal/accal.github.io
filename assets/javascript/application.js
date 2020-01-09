$(document).ready(function() {
  window.onscroll = function() {
    shrinkInit();
  };

  $('form').submit(function(e) {
    e.preventDefault();
    $(this).hide();
    $('.successful-submit').css('display', 'flex');
  });

  $('#clear').click(function() {
    $('#screen').val('');
  });

  $(
    '#1,#2,#3,#4,#5,#6,#7,#8,#9,#0, #plus, #minus, #times, #slash, #dot'
 ).click(function() {
    var v = $(this).val();
    var total = $('#screen').val($('#screen').val() + v);
  });

  $('#result').click(function() {
    $('#screen').val(eval($('#screen').val()));
  });

});

function shrinkInit(params) {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    shrinkNav(true);
  } else {
    shrinkNav(false);
  }
}

function shrinkNav(shrink = true) {
  shrink
    ? $('#navbar').addClass('navbar-shrink')
    : $('#navbar').removeClass('navbar-shrink');
}
