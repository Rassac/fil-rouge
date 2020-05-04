$(document).ready(function() {
  // On cache les sous-menus :
  $(".sous").hide();
  // On sélectionne tous les items de liste portant la classe "toggleSubMenu"

  // On modifie l'évènement "click" sur les liens dans les items de liste
  // qui portent la classe "toggleSubMenu" :
  $("#prestations").click(function() {

    // Si le sous-menu était déjà ouvert, on le referme :
    if ($(this).next(".sous").length != 0) {
      $(this).next(".sous").slideUp("normal");
    }

    // Si le sous-menu est caché, on ferme les autres et on l'affiche :
    else {
      $(".sous").slideUp("normal");
      $(this).next(".sous").slideDown("normal");
    }

    // On empêche le navigateur de suivre le lien :
    return false;
  });
});