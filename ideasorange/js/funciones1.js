
var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x=$("#h1Titulo");
  
  x.fadeIn(1500);
  x.fadeOut("slow");
  x.fadeIn("slow");
  x.fadeOut("slow");
  x.fadeIn("slow");  
}