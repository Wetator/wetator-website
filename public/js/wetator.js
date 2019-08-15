$(document).ready(function() {
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