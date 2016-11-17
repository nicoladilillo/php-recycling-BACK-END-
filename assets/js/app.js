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

  $(".indexForm").submit(function(event) {

    // Stop form from submitting normally
    event.preventDefault();

    $.ajax({
      dataType: "json",
      type: "GET",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function(data) {
        $(".autocomplete").empty();
        $(".homepage").hide();
        $(".email").hide();
        $(".bin").hide();
        $("#resultForm").remove();
        $(".result").show();
        $(".result").css("height", "100%");
        if(data.image != "no"){
          $(".bin").show(2);
          $(".bin").attr("class", "response-page bin " + data.image);
          $(".icon").attr("src","/assets/images/bin-" + data.image + ".png");
          $("h2").html(data.text);
        }
        else {
          $(".email").show(2);
          $(".email h4").html("Inserisci la tua email e ti diremo come riciclare <strong>"
                       + data.text + "</strong>");
        }
      }
    });//Close ajax()
  });//Close submit event


  //Autocomplete
  $(".indexForm").keydown(function(event) {

    $.ajax({
      dataType: "json",
      type: "GET",
      url: "autocomplete.php",
      data: $(this).serialize(),
      success: function(data) {
        $(".autocomplete").empty();
        var string = $(".indexForm input").val();
        for ( data in data ) {
           if( data.indexOf(string) == 0 )
            $(".autocomplete").append("<li style='height: 40px'>" + data + "</li>");
        }

        //Select from autocomplete
        $("li").on("click", function(event) {

          $(".textInput").val($(this).html());
          $(".autocomplete").empty()

        });
      }
    });//Close ajax()

  });//Close keypress event

})( jQuery );//Close all
