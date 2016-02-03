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

  //setting up slick 
  $('.slider').slick({
  });

  // get the posts on load
  $.ajax({
    url: 'wp-json/wp/v2/pages',
    cache: false,
    success: function(html){
      //$("#results").html(html);
      console.log(html);
    }
  });  

});