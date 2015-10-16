$(document).ready(function(){ $(".button-collapse").sideNav();})
$(document).ready(function(){$('.slider').slider({full_width: true});});
$(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
 $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
$(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });