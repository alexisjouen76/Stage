$(document).ready(function(){
   
     /***************************************************************************************
    * Function : place l'image centré dans la lightbox
	****************************************************************************************/
    
    var sizeImage = function(){
        if($(".lightBox").length > 0){
            var lightBox = $(".lightBox");
            var heightImage = lightBox.find("img").height();
            var widthImage = lightBox.find("img").width();
            
            lightBox.find("img").css({
                "margin-top":-heightImage/2,
                "margin-left":-widthImage/2
            }).fadeIn();
        }
    };
    
     /***************************************************************************************
	****************************************************************************************/
    
    
    $("#rendu").css("display","none");
    
    $('#b1').click(function() {
		$('#rendu').slideToggle(250);$('html,body').animate({scrollTop: $("#monancre").offset().top},1000);
        
	});
       
        

    
    $('.image-click').click(function() {
        sizeImage();
        $('.mask').fadeIn(1000);
        $('.image-click p').css("display","none");
        $('.image-agrandi').fadeIn(1000);
        return false; // Important pour rester sur la page
    });
      $("body").click(function(){
         $(".image-agrandi").fadeOut();
       $(".mask").fadeOut();
          $('.image-click p').css("display","block");
          return false;
         
      });
    
    $('.haute-page').click(function() {
            $('html,body').animate({scrollTop: $("#haut-page").offset().top},"slow");
        });

      
      
    
});

