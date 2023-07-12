//########### FUNCTION TO LOAD ALL BRANDS #################
function load_all_brands() {
  var returned_data = fetch("load_all_brands.php?id='load_all' ");
  returned_data
    .then(function (data) {
      if (data.ok) {
        return data.json();
      }
    })
    .then(function (data) {
      var html = "";
      data.forEach(function (brand) {
        html += `<div class="brands-col">
                            <ul>
                                <li><a href="brand_products.php?id=${brand.id}">${brand.brand}</a></li>
                            </ul>
                        </div>`;
      });
      document.getElementById("display").innerHTML = html;
    });
}

//########### FUNCTION TO LOAD ALL BRANDS #################

//############### BRAND SEARCH INPUT  USING DE-BOUNCING#######################

function debounceBrandSearch(showResults, delay) {
  let timeoutId;
  return function (...args) {
    if (timeoutId) {
      clearTimeout(timeoutId);
    }
    setTimeout(function () {
      showResults.call(this, ...args);
    }, delay);
  };
}
function showResults(e) {
  const brandName = e.target.value;
  if (brandName !== "") {
    jQuery.ajax({
      url: "get_brand.php",
      type: "post",
      data: "brandName=" + brandName,
      success: function (result) {
        var result = JSON.parse(result);
        //console.log(result);
        if (result.msg == "success") {
          var html = "";
          result.data.forEach(function (brand) {
            html += `<div class="brands-col">
                            <ul>
                                <li><a href="brand_products.php?id=${brand.id}">${brand.brand}</a></li>
                            </ul>
                        </div>`;
          });

          document.getElementById("display").innerHTML = html;
        } else {
          document.getElementById(
            "display"
          ).innerHTML = `No brand with that name : <b> ${brandName}</b> `;
        }
      },
    });
  } else {
    load_all_brands();
  }
}

const BrandSearch = debounceBrandSearch(showResults, 1000);

const searchInput = document.getElementById("brandSearch");
searchInput.addEventListener("input", BrandSearch);

//############### BRAND SEARCH INPUT USING DE-BOUNCING #######################

load_all_brands();

// ############### manage cart ##################

function manage_cart(pid, type) {
  if (type == "update") {
    var qty = jQuery("#" + pid + "qty").val();
  } else {
    // var qty = jQuery("#qty").val();
    var qty = 1;
  }
  jQuery.ajax({
    url: "manage_cart.php",
    type: "post",
    data: "pid=" + pid + "&qty=" + qty + "&type=" + type,
    success: function (result) {
      if (type == "update" || type == "remove") {
        window.location.href = "cart.php";
      }
      jQuery(".htc__qua").html(result);
    },
  });
}
// ##################### manage cart ####################

// ############# wishlist ###############
function wishlist_manage(pid, type) {
  jQuery.ajax({
    url: "wishlist_manage.php",
    type: "post",
    data: "pid=" + pid + "&type=" + type,
    success: function (result) {
      if (result == "not_login") {
        window.location.href = "login.php";
      } else {
        swal("Added!", "You product was added to the wishlist", "success");
        jQuery(".htc__wishlist").html(result);
      }
    },
  });
}
// ############# wishlist ###############

// ########### sorting #################

function sort_product_drop(cat_id, site_path) {
  var sort_product_id = jQuery("#Filter").val();
  window.location.href =
    site_path + "categories.php?id=" + cat_id + "&sort=" + sort_product_id;
}

function sort_product_brand_drop(brand_id, site_path) {
  var sort_product_brand_id = jQuery("#Filter1").val();
  window.location.href =
    site_path +
    "brand_products.php?id=" +
    brand_id +
    "&sort=" +
    sort_product_brand_id;
}

// ########### sorting #################
