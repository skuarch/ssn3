<!DOCTYPE html>
<html>

	<link rel="stylesheet" type="text/css" href="application/views/css/default2.css" />
	<link rel="stylesheet" type="text/css" href="application/views/css/menubar.css" />
	<link rel="stylesheet" type="text/css" href="application/views/css/tabs.css"/>		
		
	<script type="text/javascript" src="application/views/js/jquery-1.7.1.js"></script>
	<script type="text/javascript" src="application/views/js/jquery.panelgallery-1_1.js"></script>	
	<script type="text/javascript" src="application/views/js/readyIndex.js" ></script>

	<head>
		<title><?php echo $template_title; ?></title>
	</head>
	
	<body>
	
		<div id="headerTop" class="headerTop">
		
			<div id="wrapper">
				<div class="left"></div>
				<div class="right"></div>
				<div class="middle">
				
					<div id="container" style="padding-left:35px;position:relative ">
						<img src="application/views/images/1.jpg" alt="" width="900" height="120" />
						<img src="application/views/images/2.jpg" alt="" width="900" height="120" />
						<img src="application/views/images/8.jpg" alt="" width="900" height="120" />
						<img src="application/views/images/9.jpg" alt="" width="900" height="120" />
						<img src="application/views/images/10.jpg" alt="" width="900" height="120" />
					</div>
					
					<?php require_once 'menubar.php';?>
						
				</div>
			</div>				
				
		</div>		
		
		<div style="width:928px; margin:auto; height:1000px; background-color: #fff">
		
			<div id="divLeft" style="background-color:#ececec; width:13px; height: 100%; float:left; background-image:url('application/views/images/drop-left.png'); background-position:top left;backgrond-repeat: repeat-y; border-right: 1px solid #60D2E6">			
			</div>
			<div id="divRight" style="background-color:#ececec; width:13px; height: 100%; float:right; background-image:url('application/views/images/drop-right.png'); background-position:right left;backgrond-repeat: repeat-y; border-left:1px solid #60D2E6">
			</div>
			
			<img style="padding: 0px" src="application/views/images/300x350.jpg" alt=""/>
			<img style="padding: 0px" src="application/views/images/300x350.jpg" alt=""/>
			<img style="padding: 0px" src="application/views/images/300x350.jpg" alt=""/>			
			
		</div>	
		
	</body>	

</html>