<!DOCTYPE html>
<html>
	<head>
	
		<link rel="stylesheet" type="text/css" href="application/views/css/default.css"/>
		<link rel="stylesheet" type="text/css" href="application/views/css/menubar.css"/>
		<link rel="stylesheet" type="text/css" href="application/views/css/tabs.css"/>		
		
		<script type="text/javascript" src="application/views/js/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="application/views/js/jquery.panelgallery-1_1.js"></script>	
		<script type="text/javascript" src="application/views/js/readyIndex.js" ></script>	
		
		
		<title><?php echo $template_title; ?></title>
		
	</head>
	
	<body>
		
		<?php require_once 'header.php';?>
		
		<?php require_once 'menubar.php'; ?>
		
		<div class="wrapper"> <!-- wrapper -->			
		
			<div class="divLeft"> <!-- divLeft -->
			
				<div id="tabs_wrapper"> <!-- tabs_wrapper -->
				
					<div id="tabs_container">
					
						<ul id="tabs">						
							<li class="active"><a href="#tab1">Top estaciones</a></li>
							<li><a class="icon_accept" href="#tab2">Estaciones por region</a></li>
							<li><a href="#tab3">Buscador de estaciones</a></li>
						</ul>
						
					</div>
					
					<div id="tabs_content_container"> <!-- tabs_content_container -->
					
						<div id="tab1" class="tab_content" style="display: block;">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
						</div>
						
						<div id="tab2" class="tab_content">
							<p>This tab has icon in it.</p>
						</div>
						
						<div id="tab3" class="tab_content">
							<p>Suspendisse blandit velit eget erat suscipit in malesuada odio venenatis.</p>
						</div>
						
					</div> <!-- / tabs_content_container -->
				</div> <!-- / tabs_wrapper -->
				
			</div> <!-- / divLeft -->
				
			<div class="divRight"> <!--  divRight -->
				<img src="application/views/images/300x250.gif" alt=""/>		
			</div> <!--  / divRight -->
			
		</div> <!--/ wrapper -->
		
		<?php require_once 'footer.php'?>		
		
	</body>

</html>