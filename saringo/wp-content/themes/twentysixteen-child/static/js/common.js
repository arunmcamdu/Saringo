

$(document).ready(function(){
  $(".mega-dropdown a.trigger").on("click",function(e){
    var menu=$(this).attr('data-menu');  
    var parent= $(this).parent('.mega-dropdown');
    $('.mega-dropdown').removeClass('open');
    $(parent).addClass('open');
    $(".menu-content .mega-dropdown-menu").removeClass('open');
    $('.menu-list').toggleClass('close-menu');
    $('#'+menu).addClass('open');
    e.stopPropagation();
    e.preventDefault();
  });

  $(".sub-dropdown a.trigger").on("click",function(e){
    var menu=$(this).attr('data-menu');  
    var parent= $(this).parent('.mega-dropdown');
    $('.sub-dropdown').removeClass('open');
    $(parent).addClass('open');
    $(".sub-dropdown-outer").removeClass('open');
    $('#'+menu).toggleClass('open');
    e.stopPropagation();
    e.preventDefault();
  });



  $('.top-link').on('click', function(e){
  	var content= $(this).attr('data-content');
  	$('.modal-outer').removeClass('show');
  	$('#'+content).addClass('show');
  });

  $('.has-sub').on('click', function(e){
    var content= $(this).attr('data-tab');
    $(this).addClass('open');
    $('.sub-division').removeClass('expand');
    $('#'+content).addClass('expand');
  });

  $('.close-link').on('click', function(e){
    e.preventDefault();
    var parent= $(this).parent().find('.has-sub');
    $('.has-sub').removeClass('open');
    $('.sub-division').removeClass('expand');
    // $('#'+content).addClass('expand');
  });

  var content_image = $('#notice-img .image img').attr('src');
   $('#notice-img .inner-image').css({'background-image': 'url('+content_image+')'});
});
