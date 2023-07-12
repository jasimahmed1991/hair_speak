"use strict";

// sticky navbar
$(document).ready(function () {
  $(document).on("scroll", function () {
    if ($(document).scrollTop() > 150) {
      $("header").addClass("sticky");
      $("header").removeClass("site-header");
    } else {
      $("header").removeClass("sticky");
      $("header").addClass("site-header");
    }
  });
}); // navbar 

$("#mainToggle").click(function () {
  $("#mainNav").toggle();
});
$("#toggleNav").click(function () {
  $("#dropDown").toggle();
});
$("#add-Adresss").click(function () {
  $(".new-address").toggle();
});
$(document).ready(function () {
  $('#toggleNav2, #dropDown2').hover(function () {
    $('#dropDown2').css('display', 'block');
  }, function () {
    $('#dropDown2').css('display', 'none');
  });
});
$(document).mouseup(function (e) {
  var container = $("#dropDown");

  if (!container.is(e.target) && container.has(e.target).length === 0 && !$("#toggleNav").is(e.target)) {
    container.addClass("dropdown");
  }
}); // navbar button toggle

var btn = document.getElementById("mainToggle");
var icon = document.getElementById("toggleIcon");
btn.addEventListener("click", function () {
  icon.classList.toggle("rotate");
}); // navbar button toggle 2

$("#toggleNav").click(function () {
  $("#toggleIcontwo").toggleClass("rotate");
}); // brand page  filter

(function () {
  var projecttitle = $('.filter-title');
  projecttitle.each(function () {
    $(this).click(function () {
      projecttitle.removeClass('active');
      $(this).addClass('active');
      var projectId = $(this).attr('id');
      console.log(projectId);
      var diffproject = $('.filter-div');
      diffproject.each(function () {
        var diffId = $(this).attr('id');

        if (projectId == diffId) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
      });
    });
  });
})(); // mobile nav 


function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
} // products


$('.facialProducts').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
}); // banner 

$(document).ready(function () {
  $('.banner-carousel').owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });
}); // products

(function () {
  var projecttitle = $('.project-title');
  projecttitle.each(function () {
    $(this).click(function () {
      projecttitle.removeClass('active');
      $(this).addClass('active');
      var projectId = $(this).attr('id');
      console.log(projectId);
      var diffproject = $('.project-1');
      diffproject.each(function () {
        var diffId = $(this).attr('id');

        if (projectId == diffId) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
      });
    });
  });
})(); // aos =============


AOS.init(); // ==========================

$(".filter-accordion-title").click(function () {
  $(this).toggleClass("active");
  $(this).next().slideToggle();
}); // uncheck checkbox

function uncheckOthers(selectedBox) {
  var checkboxes = document.getElementsByName("filters");

  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i] != selectedBox) {
      checkboxes[i].checked = false;
    }
  }
} // button toggle


var button = document.querySelector(".rotate-icon-button");
button.addEventListener("click", function () {
  button.classList.toggle("active");
}); //