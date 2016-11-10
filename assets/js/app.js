(function() {
  'use strict';
  
  // Control for empty input in the search bar.
  var search_bar = document.querySelector(".search-bar");
  var input = document.querySelector(".search-bar input[type='text']");

  search_bar.addEventListener("submit", function (e) {
    if (input.value === "") {
      e.preventDefault();
      input.className = "warning";
    }
  });

  // Remove the effect when user types into the search bar
  input.addEventListener("input", function() {
    if (input.className == "warning") {
      input.className = "";
    }
  });

})();
