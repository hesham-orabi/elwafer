"use strict";

$(document).ready(function () {
  $(".nav-link").click(function () {
    $("html,body").animate({
      scrollTop: $("#" + $(this).data("value")).offset().top
    }, 1910);
  });

  function onReady(callback) {
    var intervalId = window.setInterval(function () {
      if (document.getElementsByTagName('body')[0] !== undefined) {
        window.clearInterval(intervalId);
        callback.call(this);
      }
    }, 3000);
  }

  function setVisible(selector, visible) {
    document.querySelector(selector).style.display = visible ? 'block' : 'none';
  }

  onReady(function () {
    setVisible('body', true);
    setVisible('#loading', false);
  }); // Nice Scroll

  $("body").niceScroll({
    cursorcolor: "#E43D8F",
    cursorwidth: "11px",
    background: "rgba(20,20,20,0.3)",
    cursorborder: "1px solid #E43D8F",
    cursorborderradius: 10,
    zindex: 99999999,
    autohidemode: 'leave',
    cursoropacitymin: 0.4
  }); // Navbar

  $(".nav-item .nav-link").on("click", function () {
    $(".nav-item").find(".activ").removeClass("activ");
    $(this).addClass("activ");
  }); //Main Slider
  //Product Slider

  $('#carousel_two').carousel({
    interval: 3000,
    wrap: true,
    keyboard: true
  }); // Opinions Slider

  (function autoSlider() {
    $(".opinions .active").each(function () {
      if (!$(this).is(':last-child')) {
        $(this).delay(2000).fadeOut(1000, function () {
          $(this).removeClass("active").next().addClass("active").fadeIn();
          autoSlider();
        });
      } else {
        $(this).delay(2000).fadeOut(1000, function () {
          $(this).removeClass("active");
          $(".opinions div").eq(0).addClass("active").fadeIn();
          autoSlider();
        });
      }
    });
  })();

  var scrollbutton = $("#scrollTop");
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 620) {
      scrollbutton.show();
    } else {
      scrollbutton.hide();
    }
  });
  scrollbutton.click(function () {
    $("html,body").animate({
      scrollTop: 0
    }, 1000);
  });
});
//# sourceMappingURL=script.dev.js.map
