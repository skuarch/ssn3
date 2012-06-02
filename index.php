<?php require_once 'noCache.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <title>escucharadio</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/jquery-1.7.1.js" ></script>
	<script src="js/jquery.dropshadow-1.6.js" ></script>
	<script src="js/jquery.corner-2.12.js" ></script>	
        <script src="js/isMobile.js" ></script>
        <script src="js/player.js"></script>
	<script src="js/readyIndex.js" ></script>        
	<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>         

	<link rel="stylesheet" href="css/default.css" type="text/css"/>
	<link rel="stylesheet" href="css/tabs.css" type="text/css"/>
    </head>
    <body oncontextmenu="return false;">
        
        <div id="wrapper" class="wrapper"> <!-- wrapper -->
            
            <?php require_once 'header.php' ?>
            
            <div id="container" class="container"> <!-- container --> 
                
                <div id="warning" class="warning">
                    Esta pagina usa windows media player, tal vez tengas que instalar un complemento o darle permisos
                </div>
                
                <br/>
                
                <?php require_once 'ads1.php' ?>
                
                <div class="container-left-double"> <!-- container-left-double -->                    
                    <?php require_once 'tabs.php' ?> 
                </div> <!-- end container-left-double -->
                
                <div class="space"></div>
                
                <?php require_once 'ads2.php' ?>
                
                <div class="container-left"> <!-- container-left -->
                    <?php require_once 'stationDay.php'; ?>
		</div> <!-- end container-left -->  
                
                <?php require_once 'ads3.php' ?>
                
                <div class="space"></div>
                
                <?php require_once 'ads4.php' ?>
                
                <div class="space"></div>
                
                <?php include 'ads1.php' ?>
                
                <?php require_once 'twitter.php' ?>
                
                <?php include 'ads5.php' ?>
                
                <div class="space"></div>                
                
                <div class="container-left"> <!-- container-left -->
                    <?php include 'lastStation.php'; ?>
		</div> <!-- end container-left -->
                
                <?php include 'ads1.php' ?>                 
                
                <?php require_once 'facebook.php' ?>
                
                <div class="space"></div>
                
            </div> <!-- end container --> 
            
            <?php require_once 'information-footer.php' ?>
            <?php require_once 'footer.php'; ?>
            
        </div> <!-- end wrapper -->        
        
    </body>
</html>
