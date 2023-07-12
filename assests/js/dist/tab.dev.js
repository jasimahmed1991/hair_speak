"use strict";

// product tumbnail tab
$(document).ready(function () {
  $('#tumbnail-tabs-nav li:first-child').addClass('active');
  $('.tumbmail-div').hide();
  $('.tumbmail-div:first').show(); // Click function

  $('#tumbnail-tabs-nav li').click(function () {
    $('#tumbnail-tabs-nav li').removeClass('active');
    $(this).addClass('active');
    $('.tumbmail-div').hide();
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
  });
}); // product tumbnail tab ends
// product about tabs

var tabBtns = document.querySelectorAll(".tab-btn");
var tabs = document.querySelectorAll(".tab");
tabBtns.forEach(function (btn) {
  btn.addEventListener("click", function () {
    var tabId = btn.getAttribute("id").replace("-btn", "");
    var tab = document.getElementById(tabId);
    tabs.forEach(function (t) {
      t.classList.remove("active");
    });
    tabBtns.forEach(function (tBtn) {
      tBtn.classList.remove("active");
    });
    tab.classList.add("active");
    btn.classList.add("active");
  });
}); // about product tab
// wishlist tab

$(document).ready(function () {
  $('#wishlist-tabs-nav li:first-child').addClass('active');
  $('.wtab-content').hide();
  $('.wtab-content:first').show(); // Click function

  $('#wishlist-tabs-nav li').click(function () {
    $('#wishlist-tabs-nav li').removeClass('active');
    $(this).addClass('active');
    $('.wtab-content').hide();
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
  });
}); // wishlist tab ends
// service tab

$(document).ready(function () {
  $('.service-tabs').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  });
}); // service tab filter

$(document).ready(function () {
  $('#service-tabs-nav li a:first-child').addClass('current');
  $('.stab-content').hide();
  $('.stab-content:first').show(); // Click function

  $('#service-tabs-nav li').click(function () {
    $('#service-tabs-nav li').removeClass('current');
    $(this).addClass('current');
    $('.stab-content').hide();
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
  });
}); // catalog tab

$(document).ready(function () {
  $(".catlog-content:first").show();
  $(".catalog-button").click(function () {
    $(this).next(".catlog-content").toggle();
  });
}); //   CatalogIcon

$(document).ready(function () {
  $(".catalog-button").click(function () {
    $(this).toggleClass("active");
  });
}); //

$(document).ready(function () {
  $("#service-tabs-nav li").click(function () {
    $(".hair-service-tab").show();
    $(".skin-first-tab").show();
    $(".manipedi-first-tab").show();
    $(".nails-first-tab").show();
    $(".spa-first-tab").show();
    $(".makeup-first-tab").show();
  });
});