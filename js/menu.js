$(document).ready(function(){
        $(".MenuButton").click(function(){
            $(".MenuContainer").show({ direction: "left" }, 500);
            $(".MenuButton").hide();
            $(".MenuButton").animate({left: "150",}, 500, function() {});
            $(".MenuButtonClose").show();       
            $(".MenuButtonClose").animate({left: "150",}, 500, function() {});
            $(".blackscreen").fadeIn();       
        });
        $(".MenuButtonClose").click(function() {
            $(".MenuContainer").hide({ direction: "left" }, 500);
            $(".MenuButton").show();
            $(".MenuButton").animate({left: "50",}, 500, function() {});
            $(".MenuButtonClose").hide();
            $(".MenuButtonClose").animate({left: "50",}, 500, function() {});
            $(".blackscreen").fadeOut();       
        });
        $(".blackscreen").click(function() {
            $(".MenuContainer").hide({ direction: "left" }, 500);
            $(".MenuButton").show();
            $(".MenuButton").animate({left: "50",}, 500, function() {});
            $(".MenuButtonClose").hide();
            $(".MenuButtonClose").animate({left: "50",}, 500, function() {});
            $(".blackscreen").fadeOut();       
        });
        if ($(window).width() >= 1060){	
            $(".mapButton").hide();  
            $(".MapButtonClose").hide();  
            $( ".mapVisable" ).css({"display": "block"}); 
        }else{
            
            $(".mapButton").show();  
            $(".MapButtonClose").hide();  
            $( ".mapVisable" ).css({"display": "none"}); 
        }
    
        $(window).resize(function(){
            if ($(window).width() >= 1060){	
                $(".MenuButton").css("display","none");
                $(".MenuButton").css("left","50px");
                $(".MenuButtonClose").css("display","none");
                $(".blackscreen").css("display","none");
                $(".MenuContainer").css("display","block");
                $(".mapButton").hide();  
                $(".MapButtonClose").hide();  
                $( ".mapVisable" ).css({"display": "block"}); 
            }else{
                $(".MenuButton").css("display","block");
                $(".MenuButton").css("left","50px");
                $(".MenuButtonClose").css("display","none");
                $(".blackscreen").css("display","none");
                $(".MenuContainer").css("display","none");
                $(".mapButton").show();  
                $(".MapButtonClose").hide();  
                $( ".mapVisable" ).css({"display": "none"}); 
            }
        });
        $(".mapButton").click(function() {
            $(".MapButtonClose").show();  
            $( ".mapVisable" ).css({
                "z-index": "9",
                "top": "0",
                "left": "0",
                "width": "100%",
                "height": "100%",
                "display": "block"
            }); 
            $( ".mapVisable iframe" ).css({
                "position": "absolute",
                "z-index": "9",
                "top": "0",
                "left": "0"
            });      
        });
        $(".MapButtonClose").click(function() {
            $(".MapButtonClose").hide();  
            $( ".mapVisable" ).css({
                "display": "none"
            }); 
            $( ".mapVisable iframe" ).css({
                "position": "static",
                "z-index": "auto",
                "top": "auto",
                "left": "auto"
            });      
        });
    
    });