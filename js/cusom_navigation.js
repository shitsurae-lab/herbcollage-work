jQuery(function($) {
  $(".icon-hamburger").on("click", function() {
    if ($(".menu-container .menu").css("display") === "block") {
      $(".menu-container .menu").slideUp("1500");
    } else {
      $(".menu-container .menu").slideDown("1500");
    }
  });
});
