$(document).ready(function(){	
$("#login").click(function(){$( "#dialog" ).dialog({show: {effect: 'fade', speed: 1000}});}); 
$("#register").click(function(){$( "#formdialog" ).dialog({show: {effect: 'fade', speed: 1000}});}); 
function loginalert()
{
alert("enter correct detials");
}

$("#ele").hide();
$("#mbl").hide();
$("#men1").hide();
$("#women1").hide();
$("#books1").hide();

function menu(a,b)
{
	$(a).mouseenter(function(){ $(b).show();})
	$(b).mouseenter(function(){ $(b).show();})
	$(a).mouseleave(function(){ $(b).hide();})
	$(b).mouseleave(function(){ $(b).hide();})
	
}
menu('#electronics','#ele');
menu('#mobiles','#mbl');
menu('#men','#men1');
menu('#women','#women1');
menu('#books','#books1');

function slide()
{
$("#pic").animate({left:'-1200px'},5000);
$("#pic").animate({top:'-400px'});
$("#pic").animate({left:'1250px'});
$("#pic").animate({top:'0px'});
$("#pic").animate({left:'-600px'},5000);
slide();
}
slide();





});