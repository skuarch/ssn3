<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        
        <script src="js/jquery-1.7.1.js" ></script>	
	<script src="js/jquery.corner-2.12.js" ></script>	
        <script src="js/isMobile.js" ></script>
        <script src="js/player.js"></script>
        <script src="js/setPlayerBox.js"></script>
	<script src="js/readyIndex.js" ></script>        
        <script src="js/jquery.scrollto-1.4.2.js" ></script>
        <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script> 
        
        <link rel="stylesheet" href="css/default.css" type="text/css" />
        <link rel="stylesheet" href="css/tabs.css" type="text/css" />
        <link rel="stylesheet" href="css/allStations.css" type="text/css" />
       
        <title>escucharadio</title>
        
    </head>
    <body>
        
        <div class="wrapper"> <!-- wrapper --> 
        
            <?php require_once 'header.php' ?>
            
            <div class="container"> <!-- container -->
                
                <div class="container-330">
                    <img src="images/ads300x250.jpg" alt=""/>
                </div>
                
                <div class="container-330">
                    <?php require_once 'player.php'; ?>
                </div>
                
                <div class="container-330">
                    <img src="images/ads300x250.jpg" alt=""/>
                </div>
                
                <div class="space"></div>
                <div class="space"></div>
                
                <div class="container-left-double"> <!-- container-left-double -->                    
                    <?php require_once 'tabs.php' ?> 
                </div> <!-- end container-left-double -->
                
                <div class="space"></div>
                
            </div> <!-- end container -->
            
            <?php require_once 'information-footer.php'; ?>
            <?php require_once 'footer.php'; ?>
            
        </div> <!-- end wrapper --> 
        
    </body>
</html>
