(function() {
  'use strict';
  
  // Control for empty input in the search bar.
  var search_bar = document.querySelector(".search-bar");
  var input = document.querySelector(".search-bar input[type='text']");

  search_bar.addEventListener("submit", function (e) {
    if (input.value === "") {
      e.preventDefault();
    	// Code for the warning pop-up
    }
  });
})();
