$(document).on("ready",inicio);
alert("hey estas accediendo a SISGEMA")
function inicio()
{
	
	$("#bus").on("click",mostrarInfoBus);
	$("#Movil").on("click",mostrarInfoMovil);

}
function mostrarInfoBus()
{
	var cambioCss=
	{
		margin:0,
		height:"8em"
		
	};
	var mostrarInfo=
	{
		display:"block",
		
		width:"100%"

	};
	var ocultarInfo=
	{
		display:"none"
		
	};
	$("#Movil").css(cambioCss);
	$("#bus").css(cambioCss);
	$("#InfoBus").css(mostrarInfo);
	$("#InfoMovil").css(ocultarInfo);

}
function mostrarInfoMovil()
{
	var cambioCss=
	{
		margin:0,
		height:"8em"
		
	};
	var mostrarInfo=
	{
		display:"block",
		
		width:"100%"

	};
	var ocultarInfo=
	{
		display:"none"
		
	};
	$("#Movil").css(cambioCss);
	$("#bus").css(cambioCss);
	$("#InfoMovil").css(mostrarInfo);
	$("#InfoBus").css(ocultarInfo);
}