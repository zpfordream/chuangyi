//menu
$(document).ready(function(){
  
  $('li.mainlevel').mousemove(function(){
  $(this).find('ul').css("display","block");//you can give it a speed
  });
  $('li.mainlevel').mouseleave(function(){
  $(this).find('ul').css("display","none");
  });
  
});