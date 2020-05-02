$(document).ready(function() {
  $('#prestations').click(function() {
    //Grab the "href" attribute of the anchor
    var anchor = $(this).attr('href');

    //If you want to hide
    $(anchor).hide();

    //Uncomment if you want to show
    //$(anchor).show();
  });
});