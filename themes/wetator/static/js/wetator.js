$(document).ready(function() {
  // Mobile navigation toggle
  $('#nav_toggle').on('click', function() {
    var nav = $('#header_nav');
    var expanded = nav.hasClass('open');
    nav.toggleClass('open');
    $(this).attr('aria-expanded', !expanded);
  });

  // Close nav when a link is clicked on mobile
  $('#header_nav a').on('click', function() {
    if ($(window).width() <= 600) {
      $('#header_nav').removeClass('open');
      $('#nav_toggle').attr('aria-expanded', false);
    }
  });

  // Toggle panels
  $(".togglePanel_content").hide(); 
  $(".togglePanel").click(function(){
    if ($(this).hasClass("togglePanel_open")) {
      var myPanel=$(this);myPanel.next().slideToggle("slow", function() { myPanel.toggleClass("togglePanel_open"); } );
      myPanel.find(".cmd_overview").show();
    } else {
      var myPanel=$(this);myPanel.addClass("togglePanel_open");
      myPanel.next().slideToggle("slow", function() {myPanel.find(".cmd_overview").hide();});
    }
    return false;
  });
  $('[class="tooltip"]').tipsy({fade: true, gravity: 's'});
});
