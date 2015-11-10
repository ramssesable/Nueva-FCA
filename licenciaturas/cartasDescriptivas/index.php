<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>Cartas Descriptivas FCA</title>
    	<meta name="description" content="UABC FCA Cartas descriptivas"/>
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="../../css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		
		
		<!-- JS -->
		<script src="../../js/jquery-1.6.4.min.js"></script>
		<script src="../../js/css3-mediaqueries.js"></script>
		<script src="../../js/custom.js"></script>
		<script src="../../js/tabs.js"></script>
		
		<!-- Tweet -->
		<link rel="stylesheet" href="../../css/jquery.tweet.css" media="all"  /> 
		<script src="../../js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="../../css/superfish.css" /> 
		<script  src="../../js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="../../js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="../../js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="../../js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="../../js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="../../js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="../../js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="../../js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Flex Slider -->
		<link rel="stylesheet" href="../../css/flexslider.css" >
		<script src="../../js/jquery.flexslider-min.js"></script>
		<!-- ENDS Flex Slider -->
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="../../css/lessframework.css"/>
		
		<!-- modernizr -->
		<script src="../../js/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="../../css/skin.css"/>
		
		<!-- reply move form -->
		<script src="../../js/moveform.js"></script>
		
        <link href="../../Imagenes/icono.png" type="image/x-icon" rel="shortcut icon" />

	</head>
	
	<body lang="en">
		<header class="clearfix">

			<!-- top widget -->
			<div id="top-widget-holder">
				<div class="wrapper">
					<div id="top-widget">
						<div id="anuncios" class="padding"></div> <!-- Se cargara los anuncios desde el archivo anuncios.html -->
					</div>
				</div>
				<a href="#" id="top-open">Menu</a>
			</div>
			<!-- ENDS top-widget -->

			<div class="wrapper clearfix">
				<!-- el nombre es una foto-->
				<a href="http://www.uabc.mx/" id="logo"><img  src="../../Imagenes/logo.png" alt="FCA"></a>
				<div id="menu"></div><!-- Se cargara el menu desde el archivo menu.html -->
			</div>
		</header>
		
		<!-- MAIN -->
		<div id="main">	
			<div class="wrapper clearfix">
	        	
				<!-- page content -->
	        	<div id="page-content" class="clearfix">

				</div>
				<div id="mensaje"></div>
	        	<!--  page content-->
	        	
	        	

	        	
			</div>
		</div>
		<!-- ENDS MAIN -->
		
		<div id="footer"></div> <!-- Se cargara el footer desde el archivo footer.html -->
		
<a style="display:scroll; position:fixed; bottom:10px; right:80px;" href="#" title="Volver arriba"><img src="https://lh6.googleusercontent.com/--o4LqmhRiJA/U-CDrX0wmZI/AAAAAAAAFZc/OKM6ANlJe5M/h240/up.png" /></a>
<img border='0' src='../../Imagenes/mensage.png' style='position:absolute;padding-right:20px;padding-top:15px; top:0; right:0;' />
		<script type="text/javascript" language="javascript">
			$(document).ready(function() {
				$location = window.location.origin;
				$("#anuncios").load($location+"/Nueva-FCA/anuncios.html"); //Carga los anuncios desde el archivo anuncios.html
				$("#menu").load($location+"/Nueva-FCA/menu.html"); //Carga el menu desde el archivo menu.html
				$("#footer").load($location+"/Nueva-FCA/footer.html"); //Carga el footer desde el archivo footer.html

				//
				var procedencia = <?php echo $_GET['procedencia']; ?>;
				switch (procedencia) {
					case 1:
						var accordion	= $("<object/>").attr("data","conta.html").attr("type","text/html").css("width","100%").css("min-height","720px");
						accordion.appendTo("#page-content");
						break;
					case 2:
						var accordion	= $("<iframe/>").attr("src","merca.html").attr("scrolling","no").css("width","100%").css("min-height","720px");
						accordion.appendTo("#page-content");
						break;
					case 3:
						var accordion	= $("<iframe/>").attr("src","negocios.html").attr("scrolling","no").css("width","100%").css("min-height","720px");
						accordion.appendTo("#page-content");
						break;
					case 4:
						var accordion	= $("<iframe/>").attr("src","info.html").attr("scrolling","no").css("width","100%").css("min-height","720px");
						accordion.appendTo("#page-content");
						break;
					case 5:
						var accordion	= $("<iframe/>").attr("src","turistica.html").attr("scrolling","no").css("width","100%").css("min-height","720px");
						accordion.appendTo("#page-content");
						break;
					case 6:
						var accordion	= $("<iframe/>").attr("src","admin.html").attr("scrolling","no").css("width","100%").css("min-height","720px");
						accordion.appendTo("#page-content");
						break;
					case 99:
						var accordion	= $("<iframe/>").attr("src","info.html").attr("scrolling","no").css("width","100%").css("min-height","720px");
						accordion.appendTo("#page-content");
						break;
				}
				
			});
		</script>
	</body>
	
</html>