// added by archit
$(document).ready(function() {
    $(".component-list-1-add-button").hide();
    $(".component-list-2-add-button").click(function(){
        $(".sliding_box").slideToggle(1000);
        $(".component-list-1-add-button").show();
        $(".component-list-2-add-button").hide();
    });
    $(".component-list-1-add-button").click(function(){
        $(".sliding_box").slideToggle(1000);
        $(".component-list-2-add-button").show();
        $(".component-list-1-add-button").hide();
    });
});

// start of read more


function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "less"; 
      moreText.style.display = "inline";
    }
  }
// end of read more


// end of slider

