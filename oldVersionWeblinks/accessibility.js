  window.onload = function(){ alert("welcome"); }
  $(document).ready(function(){
   $("a").click(function(event){
     alert("Thanks for visiting!");
   });
 });
 
 $(document).ready(function(){
   $("a").click(function(event){
     alert("As you can see, the link no longer took you to jquery.com");
     event.preventDefault();
   });
 });