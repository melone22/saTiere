$(document).ready(function(){

            $("#erscheinen").fadeIn(1800);
            //Kommentar zu JQuery Effekt bei Kontakt-Seite: yeeeeaaaaahhh ich habs geschafft :D :D :D 

            var ausgang = function(){
                  $("#op1").css("opacity", "1");
                  $("#icons_marlene" ).css("display", "none");
                  };

            var ausgang2 = function(){
                  $("#op2").css("opacity", "1");
                  $("#icons_martina" ).css("display", "none");
                  };

 
            $( "#op1" ).mouseenter(function() {

                $(this).css("opacity", "0.2");
                $("#icons_marlene" ).slideDown(800).css("display", "block").css("text-align", "center");
                  setTimeout(ausgang,4000);
                });

                
            $( "#op2" ).mouseenter(function() {
                $(this).css("opacity", "0.2");
                $("#icons_martina" ).slideDown(800).css("display", "block").css("text-align", "center");
                setTimeout(ausgang2,4000);
              });

         //Slider als accesible Element auf new Ideas Seite. 

            $(function() {
                $( "#slider" ).slider({
                  value:2,
                  min: 0,
                  max: 4,
                  step: 1,
                  slide: function( event, ui ) {

                    if(ui.value == 0){
                        $( "#amount" ).val( "Verbesserungsbedarf :(");
                    }
                    if(ui.value == 1){
                        $( "#amount" ).val( "Naja :/ ");
                    }
                    if(ui.value == 2){
                        $( "#amount" ).val( "SaTierös ");
                    }
                    if(ui.value == 3){
                        $( "#amount" ).val( "Moi Moi .. süße Satiere :) ");
                    }
                    if(ui.value == 4){
                        $( "#amount" ).val( "Geilste story ever :D :D " );
                    }

                  }
                });
                $( "#amount" ).val( "SaTierös " );
            });
  			

        //Back-Top element auf der Technik-Satiere Seite
			 $("#back-top").hide();

  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100){
        $("#back-top").fadeIn();
      } else {
        $("#back-top").fadeOut();
      }
    });

     //scroll body to 0px on click
    $("#back-top .fi-arrow-up").click(function () {
      $(".panel2").animate({
        scrollTop: 0
      }, "slow");
      return false;
    });
  });

});
