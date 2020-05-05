$(document).ready(function() {
  $('#sous').hide();

  var ouvert = false;

  $('#prestations').click(function() {
    if (ouvert) {
      $('#sous').hide();
      ouvert = false;
    } else {
      $('#sous').show();
      ouvert = true;
    }

    // console.log('ici');
  });
});