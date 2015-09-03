function crearHeader () {
	
}

function cargarMenuAlumnos () {
	var $_lista 		= $("<dl/>").addClass("sub-nav show-for-large-up");
	var $_renglonT 		= $("<dt/>");
	var $_renglonTTemp	= $("<b/>").html("Men&uacute; Alumnos:").appendTo($_renglonT);
	$_renglonT.appendTo($_lista);
	var $_renglonD		= $("<dd/>").addClass("active");
	var $_renglonDTemp	= $("<a/>").attr("href","http://fca.mxl.uabc.mx/facultad/cursoPropedeutico.html").html("Aspirantes").appendTo($_renglonD);
	$_renglonD.appendTo($_lista);
	var $_renglonD		= $("<dd/>");
	var $_renglonDTemp	= $("<a/>").attr("href","http://alumnos.uabc.mx").html("Portal Alumnos").appendTo($_renglonD);
	$_renglonD.appendTo($_lista);
	var $_renglonD		= $("<dd/>");
	var $_renglonDTemp	= $("<a/>").attr("href","http://reinscripciones.uabc.mx").html("Reinscripciones").appendTo($_renglonD);
	$_renglonD.appendTo($_lista);
	var $_renglonD		= $("<dd/>");
	var $_renglonDTemp	= $("<a/>").attr("href","http://148.231.9.12/wd120awp.exe/connect/siss2009r2").html("Servicios Sociales").appendTo($_renglonD);
	$_renglonD.appendTo($_lista);
	var $_renglonD		= $("<dd/>");
	var $_renglonDTemp	= $("<a/>").attr("href","https://pagos.uabc.mx/").html("Pago Web").appendTo($_renglonD);
	$_renglonD.appendTo($_lista);
	var $_renglonD		= $("<dd/>");
	var $_renglonDTemp	= $("<a/>").attr("href","http://correo.uabc.edu.mx").html("Correo UABC").appendTo($_renglonD);
	$_renglonD.appendTo($_lista);
	$_lista.appendTo("#menuAlumnos");
}