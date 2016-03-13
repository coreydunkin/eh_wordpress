// custom script
$(document).ready(function(){

  // add class to nav if scrolled down
  $(window).scroll(function() {    
      var scroll = $(window).scrollTop();

       //>=, not <=
      if (scroll >= 200) {
          //clearHeader, not clearheader - caps H
          $('#masthead').addClass('down');
      } else if (scroll < 200) {
          $('#masthead').removeClass('down');
      }
  }); //missing );

  setTimeout(function() {
    $('.subdesc').equalHeights();
  }, 200);


  //setting up slick 
  $('.slider').slick({
    //adaptiveHeight: true,
  });


  if($('body').hasClass('home')) {

  video.play();

  $('.site-footer').addClass('fixed');

  $('.slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
      //console.log('hello');
      video.play();
  });


  }





$("p").find(":contains('Email:')").each(function(){
    $this = $(this);

    //Example replacement using HTML, but can also just us text() for simple changes
    $this.prepend($("<span class='break'>").text(""));
});

  // wrap second word in slider header
 /* $('.text-block h1').html(function(){  
    // separate the text by spaces
    var text= $(this).text().split(' ');
    // drop the last word and store it in a variable
    var last = text.pop();
    // join the text back and if it has more than 1 word add the span tag
    // to the last word
    return text.join(" ") + (text.length > 0 ? ' <span>'+last+'</span>' : last);   
  });*/

  // get the posts on load
  $.ajax({
    url: 'wp-json/wp/v2/pages',
    cache: false,
    success: function(html){
      //$("#results").html(html);
      console.log(html);
    }
  });  


  $('#content').on('click', function() {
    //console.log('hahahaha');
    //$('.main-navigation').removeClass('toggled');
  });

  $('.menu-toggle').on('click', function(event) {
    if ($('.off-state').is(':visible')) {
      $('.off-state').hide();
    } else {
      $('.off-state').show();
    };
  });

  $('.off-state').on('click', function() {
    if ($('.off-state').is(':visible')) {
      console.log('lflf');
      $('.menu-toggle').trigger('click');
    };
    
    
  });


});