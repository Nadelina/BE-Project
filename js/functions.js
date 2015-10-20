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
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
});