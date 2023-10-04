$(document).ready(function() {

  $(".axxx").click(function(event) {
    event.preventDefault();
  });
  $(".unlink").click(function(event) {
    event.preventDefault();
  });

  $("#default-settings").click(function() {
    if(!$('#default-settings').hasClass("active")){
      $('#default-settings').addClass("active");
    }else{
      $('#default-settings').removeClass("active");
    }
  });
  $(".notification-nav-view").click(function() {
    if(!$('.notification-nav-view').hasClass("active")){
      $('.notification-nav-view').addClass("active");
    }else{
      $('.notification-nav-view').removeClass("active");
    }
  });
  $("#dil").click(function() {
    if(!$('#dil').hasClass("active")){
      $('#dil').addClass("active");
    }else{
      $('#dil').removeClass("active");
    }
  });
  $("#balbox").click(function() {
    if(!$('#balboxx').hasClass("active")){
      $('#balboxx').addClass("active");
    }else{
      $('#balboxx').removeClass("active");
    }
  });
  // separator-contain-nav

});

function loginoralert() {
  if (logged) {
    Swal.fire(
      "Yetersiz Bakiye",
      "Lütfen bakiyenizi güncelledikten sonra tekrar deneyin",
      "warning"
    );
  } else {
    Swal.fire("", "Lütfen hesabınıza giriş yapın", "warning");
  }
}


$(document).on("click", 'a[href="#"]', (e) => e.preventDefault());
$(document).on("submit", 'form[action="#"]', (e) => e.preventDefault());

// jQuery
function jqUpdateSize(){
    // Get the dimensions of the viewport
    var width = $(window).width();
    var height = $(window).height();

    if (width < 1366 && width > 768) {
      //$('body').attr('id', 'isDesktop');

    }else if(width < 768){
      //$('body').attr('id', 'isMobile');

    }else if(width > 1366){
      //$('body').attr('id', 'isDesktop');

    }
};
$(document).ready(jqUpdateSize);
$(window).resize(jqUpdateSize);

window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        $("#main-header-container").addClass("show-fix");
        $("#main-header-container").removeClass("show-norma");
    } else {
        $("#main-header-container").removeClass("show-fix");
        $("#main-header-container").addClass("show-norma");
    }
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {

    }
};