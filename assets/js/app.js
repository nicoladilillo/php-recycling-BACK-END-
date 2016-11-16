(function( $ ){
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
  });

  $(".indexForm").submit(function(event){

    // Stop form from submitting normally
    event.preventDefault();

    $.ajax({
      dataType: "json",
      type: "GET",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function(data) {
        if(data.image != "no"){
          $(".homepage").hide();
          $(".email").hide();
          $(".bin").hide();
          $("#resultForm").remove();
          $(".result").show();
          $(".result").css("height", "100%");
          $(".bin").show(2);
          $(".bin").attr("class", "response-page bin " + data.image);
          $(".icon").attr("src","/assets/images/bin-" + data.image + ".png");
          $("h2").html(data.text);
        }
        else {
          $(".homepage").hide();
          $(".bin").hide();
          $(".email").hide();
          $("#resultForm").remove();
          $(".result").show();
          $(".result").css("height", "100%");
          $(".email").show(2);
          $(".email h4").html("Inserisci la tua email e ti diremo come riciclare <strong>"
                       + data.text + "</strong>");
        }
       },
       /*error: function(data) {
        console.log("errore");
        $(".homepage").hide();
        $(".bin").hide();
        $("#resultForm").remove();
        $(".result").show();
        $(".email").show();
        $("h2").html(data.object);
      }*/
    });//close ajax()

  });//close submit event

})( jQuery );//close
