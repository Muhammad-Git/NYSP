<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <a href="index.php"> <img src="assets/images/footer-logo.png" alt=""> </a>
                </div>
                <div class="socail-links">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> </a>
                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                </div>
                <hr>
                <p class="copy-right">© All Right Reserved 2024. Name Your Selling Home.</p>
            </div>
        </div>
    </div>
</footer>

<body>
    

    <script src="assets/js/wow-animate.js"></script>
    <script src="assets/js/lib.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    
    
    
    
    
    
    
    
    
    
    
    
    <script type="text/javascript">
        
        $(".sold-slider").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    infinite: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});
        $(document).on('ready', function () {




            wow = new WOW(
                {
                    animateClass: 'animated',
                    offset: 100,
                    callback: function (box) {
                        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                    }
                }
            );

            wow.init();


        });



    </script>






<script>



 $(document).ready(function () {

  
    
      $(".step-btn1").click(function(){
      
      
       var v = $(".step1-value").val();
        $("#unitnumber").val(v);   
        
   })
   
   $(".step-btn2").click(function(){
       var v = $(this).attr("rel");
        $("#typeofproperty").val(v);
   })
   
   
   $(".step-btn3").click(function(){
       var v = $(this).attr("rel");
        $("#propertybuilt").val(v);
   })
   
   $(".step-btn4").click(function(){
       var v = $(this).attr("rel");
        $("#propertycondition").val(v);
   })
   
   $(".step-btn5").click(function(){
       var v = $(this).attr("rel");
        $("#propertysell").val(v);
   })
   
   $(".step-btn6").click(function(){
       var v = $(".step6-value").val();
        $("#homeworth").val(v);       
   })
   
    $(".step-btn7").click(function(){
       var v = $(this).attr("rel");
        $("#thinksell").val(v);
   })
   
   $(".step-btn8").click(function(){
       var v = $(this).attr("rel");
        $("#hearing").val(v);
   })
   
   $(".step-btn9").click(function(){
       var fn = $("#step-btn9-fname").val();       
        var e =  $("#step-btn9-email").val();       
        
        $("#fname").val(fn);       
        $("#email").val(e);       
   })
   


    $("#form-sbmt-btn").click(function(){
        
        var url = $("#email-form").attr("action"); 
        var unitnumber = $("#unitnumber").val();
        var typeofproperty = $("#typeofproperty").val();
        var propertybuilt = $("#propertybuilt").val();
        var propertycondition = $("#propertycondition").val();
        var propertysell = $("#propertysell").val();
        var homeworth = $("#homeworth").val();
        var thinksell = $("#thinksell").val();
        var hearing = $("#hearing").val();
        var fname = $("#fname").val();
        var email = $("#email").val();
        var address = $("#address").val();
        var phone = $("#phone").val();
        
    
        
        $.ajax({
            type: "POST",
            url: url,
            data: { unitnumber : unitnumber, typeofproperty : typeofproperty, propertybuilt : propertybuilt, propertycondition : propertycondition, propertysell : propertysell, homeworth : homeworth, thinksell : thinksell, hearing : hearing, fname : fname, email : email, address : address, phone : phone },
            success: function(data) {
                $("#step-10").hide();
                $("#step-11").fadeIn();
            }
        });
        
        return false;
        
        
    })   


// step form start

    $(".step-btn1").click(function(){
        
        
            
            $("#step-2").show();
            $("#step-1").hide();
            
        
       
    });
    
    
    $(".step-btn2").click(function(){
        $("#step-2").hide();
        $("#step-3").show();
});
    $(".step-btn3").click(function(){
        $("#step-3").hide();
        $("#step-4").show();
});
    $(".step-btn4").click(function(){
        $("#step-4").hide();
        $("#step-5").show();
});
    $(".step-btn5").click(function(){
        $("#step-5").hide();
        $("#step-6").show();
});

    $(".step-btn6").click(function(){
        
       if ($(".step6-value").val() != "") { 
        $("#step-6").hide();
        $("#step-7").show();
       }
       else {
           
           alert("please enter Estimated Price");
            return false; 
            
           }
        
});


    $(".step-btn7").click(function(){
        $("#step-7").hide();
        $("#step-8").show();
});
    $(".step-btn8").click(function(){
        $("#step-8").hide();
        $("#step-9").show();
});
    $(".step-btn9").click(function(){
        
         if ($("#step-btn9-fname").val() != "" || $("#step-btn9-email").val() != "" ) { 
             
        $("#step-9").hide();
        $("#step-10").show();
        
         }
         else{
             
             alert("please Enter all feilds");
            return false; 
            
             }
        
        
});
    $(".step-btn10").click(function(){
        $("#step-10").hide();
        $("#step-11").show();
});
    $(".step-btn11").click(function(){
        $("#step-11").hide();
        $("#step-12").show();
});
    $(".step-btn12").click(function(){
        $("#step-12").hide();
        $("#step-13").show();
});
   
  });

// step form end
</script>












</body>

</html>