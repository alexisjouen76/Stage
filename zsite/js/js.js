$(function(){
  var myvideo = document.getElementById('myvideo');
    $('#myvideo').fadeout(0);
    
setTimeout(function){
    $('#myvideo').fadein(15000);
    myvideo.volume = 0;
    myvideo.play();
},1500);
    
    
    
}));
    
    