// Delayed Modal Display + Cookie On Click
$(document).ready(function() {

  // If no cookie with our chosen name (e.g. no_thanks)...
  if ($.cookie("no_thanks") == null) {

    // Show the modal, with delay func.
    $('#modal').appendTo("body");
    function show_modal(){
      $('#modal').modal();
    }

    // Set delay func. time in milliseconds
    window.setTimeout(show_modal, 500);
    }

  // On click of specified class (e.g. 'nothanks'), trigger cookie, which expires
  //in 100 years change dontshow2 to dontshow when ready to enable cookies
  $(".dontShow2").click(function() {
    $.cookie('no_thanks', 'true', { expires: 36500, path: '/' });
  });
});
