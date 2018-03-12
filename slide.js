$(document).ready(function()
{
	
	
	$("#b1").click(function(){
  $("ul#laptop").animate({left:'-510px'},2000);
}); 
$("#p1").click(function(){
  $("ul#laptop").animate({left:'-40px'},2000);
}); 
$("#b4").click(function(){
  $("ul#mobile").animate({left:'-500px'},2000);
});
$("#p4").click(function(){
  $("ul#mobile").animate({left:'-40px'},2000);
});


	$("#b2").click(function(){
  $("ul#women").animate({left:'-900px'},2000);
});
$("#p2").click(function(){
  $("ul#women").animate({left:'-40px'},2000);
});

$("#b3").click(function(){
  $("ul#men").animate({left:'-820px'},2000);
});
$("#p3").click(function(){
  $("ul#men").animate({left:'-40px'},2000);
});





function leftslider(){
var count=0;
 if(count==0)
	 {$("#left-image ul").animate({left:'-345px'},3000);count++;}
  if(count==1)
	 {$("#left-image ul").animate({left:'-690px'},3000);count++;}
	 if(count==2)
	 {$("#left-image ul").animate({left:'0px'},3000);count=0;}
leftslider();
}
leftslider();



  
});