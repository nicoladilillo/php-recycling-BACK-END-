  /*(function() {
  'use strict';

// Control for empty input in the search bar.
  var searchBar = document.querySelector(".search-bar");
  var input = document.querySelector(".search-bar input[type='text']");

  searchBar.addEventListener("submit", function (e) {
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
  });*/

  $(document).ready(function(){
    $("#resultForm").submit(function(event){

      // Stop form from submitting normally
      event.preventDefault();

      $.ajax({
        dataType: "json",
        type: "GET",
        url: $(this).attr("action"),
        data: $(this).serialize(),
        success: function(data)
         {
           $(".homepage").hide();
           if(data != "no")
              $(".result").show();
              $(".result").css("height", "100%");
              $(".response-page").attr("class", "response-page " + data.image);
              $(".icon").attr("src","/assets/images/bin-" + data.image + ".png");
              $("h2").html(data.text);
         },
         error: function() {
           console.log("errore");
         }
      });//close ajax()

    });//close submit event
  });//close $(document).ready
//})//close
