$(document).ready(function(){
 $randomNumber = Math.floor((Math.random()*4)+1);
 $bg="img/bg"+$randomNumber+".jpg";
 $("#large-header").css({'background-image': 'url(' + $bg + ')', });
});	// End document.ready()
