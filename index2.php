<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script src="js/jquery-1.7.1.js" ></script>
		<script src="js/jquery.dropshadow-1.6.js" ></script>
		<script src="js/jquery.corner-2.12.js" ></script>
		<script src="js/isMobile.js" ></script>
		<script src="js/readyIndex.js" ></script>
		<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>               

		<link rel="stylesheet" href="css/default.css" type="text/css"/>
		<link rel="stylesheet" href="css/tabs.css" type="text/css"/>

		<title>escucharadio</title>
	</head>

	<body oncontextmenu="return false;">

		<div id="wrapper" class="wrapper"> <!-- wrapper -->

			<?php require_once 'header.php' ?>	
			
			<div id="container" class="container"> <!-- container -->

				<div class="container-left-double"> <!-- container-left-double -->
	
					<div id="tabs_wrapper"> <!-- tabs_wrapper -->
					
						<div id="tabs_container">
					
							<ul id="tabs">						
								<li class="active"><a href="#tab1">Top estaciones</a></li>
								<li><a class="#tab2" href="#tab2">Estaciones por region</a></li>
								<li><a href="#tab3">Buscador de estaciones</a></li>
							</ul>
						
						</div>				
					
					</div> <!-- / tabs_wrapper -->
				
				<div id="tabs_content_container"> <!-- tabs_content_container -->
					
						<div id="tab1" class="tab_content" style="display: block;">
							<p>consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
						</div>
						
						<div id="tab2" class="tab_content">
							<p>This tab has icon in it.</p>
						</div>
						
						<div id="tab3" class="tab_content">
							<p>Suspendisse blandit velit eget erat suscipit in malesuada odio venenatis.</p>
						</div>
						
					</div> <!-- / tabs_content_container -->

				</div> <!-- end container-left-double -->

				<div id="one" class="container-right"> <!-- container-right -->
					<img src="images/300x250.gif" alt=""/>
				</div> <!-- end container-right -->

				<div class="space"></div>

				<div class="container-left"> <!-- container-left -->
					<img src="images/300x250.jpg" alt=""/> 
				</div> <!-- end container-left -->

				<div class="twitter-div"> <!-- twitter-div -->
					<script>
						new TWTR.Widget({
						  version: 2,
						  type: 'profile',
						  rpp: 10,
						  interval: 200,
						  width: 300,
						  height: 160,
						  theme: {
						    shell: {
						      background: '#009ccc',
						      color: '#ffffff'
						    },
						    tweets: {
						      background: '#ffffff',
						      color: '#1c7cb0',
						      links: '#4d4d4d'
						    }
						  },
						  features: {
						    scrollbar: false,
						    loop: true,
						    live: true,
						    behavior: 'default'
						  }
						}).render().setUser('escucharadio1').start();
					</script>
				</div> <!-- end twitter-div -->

				<div class="container-right"> <!-- container-right -->
					<img src="images/300x250_3.jpg" alt=""/> 
				</div> <!-- end container-right -->

				<div class="space"></div>

				<div class="horizontal-div"> <!-- horizontal-div -->
					<img src="images/728x90.gif" alt="" />					
				</div> <!-- end horizontal-div -->

				<div class="space"></div>

				<div id="fb-root"></div>

				<div class="container-left"> <!-- container-left -->
					<div class="fb-like-box" data-href="http://www.facebook.com/escucharadiomx" data-width="300" data-height="250" data-show-faces="true" data-stream="false" data-header="true"></div>
				</div> <!-- end container-left -->

				<div class="container-left"> <!-- container-left -->
					<img src="images/300x250.jpg" alt=""/> 
				</div> <!-- end container-left -->

				<div class="container-left"> <!-- container-left -->
					<?php require_once 'stationDay.php'; ?>
				</div> <!-- end container-left -->
                                
				<div class="space"></div>

			</div> <!-- end container -->

			<?php require_once 'information-footer.php' ?>
			<?php require_once 'footer.php'; ?>

		</div> <!-- end wrapper -->
                
	</body>

</html>
