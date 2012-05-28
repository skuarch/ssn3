<!DOCTYPE html>
<html>
	<head>	

		<script src="js/jquery-1.7.1.js" ></script>
		<script src="js/jquery.dropshadow-1.6.js" ></script>
		<script src="js/jquery.corner-2.12.js" ></script>
		<script src="js/readyIndex.js" ></script>

		<link rel="stylesheet" href="css/default.css" type="text/css"/>
		<link rel="stylesheet" href="css/tabs.css" type="text/css"/>

		<title>escucharadio</title>

	</head>

	<body oncontextmenu="return false;">

		<div id="wrapper" class="wrapper"> <!-- wrapper -->
			<?php require_once 'header.php' ?>	

			<div id="container" class="container"> <!-- container -->
				<div id="tabs_wrapper"> <!-- tabs_wrapper -->
				
					<div id="tabs_container">
					
						<ul id="tabs">						
							<li class="active"><a href="#tab1">Top estaciones</a></li>
							<li><a class="icon_accept" href="#tab2">Estaciones por region</a></li>
							<li><a href="#tab3">Buscador de estaciones</a></li>
						</ul>
						
					</div>				
					
				</div> <!-- / tabs_wrapper -->
				
				<div id="tabs_content_container"> <!-- tabs_content_container -->
					
						<div id="tab1" class="tab_content" style="display: block;">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.Lorem ipsum dolor sit amet.</p>
						</div>
						
						<div id="tab2" class="tab_content">
							<p>This tab has icon in it.</p>
						</div>
						
						<div id="tab3" class="tab_content">
							<p>Suspendisse blandit velit eget erat suscipit in malesuada odio venenatis.</p>
						</div>
						
					</div> <!-- / tabs_content_container -->
			</div> <!-- end container -->


			<img src="images/300x250.jpg" alt=""/>
			

			<div id="information-footer" class="information-footer"> <!-- information-footer -->

				<div style="padding: 40px;">

					<div style="width:240px; float: left;">
						<div style=""><h4>LO MAS ESCUCHADO</h4></div>
						
						<br/>
						977
						<br/>
						los cuarenta principales
					</div>

					<div style="width:240px; float: left">
						<div style=""><h4>ESTACIONES POR GENERO</h4></div>
						<br/>
						977
						<br/>
						los cuarenta principales
					</div>

				
					<div style="width:240px; float: left">
						<div style=""><h4>ESTACIONES RECIENTES</h4></div>
						<br/>
						977
						<br/>
						los cuarenta principales
					</div>
				</div>

				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
			</div>	<!-- end information-footer -->

			<?php require_once 'footer.php'; ?>

		</div><!-- end wrapper -->
		
		<br/>

	</body>

</html>
