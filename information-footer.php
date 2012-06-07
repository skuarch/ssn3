<?php 
    
    require_once 'EscuchaRadioConnection.php'; 
    
    $connection = new EscuchaRadioConnection();
    $result = $connection->executeQry("select * from stations order by station_id desc limit 10");  
    
?>

<div id="infomation-footer" class="information-footer"> <!-- information-footer -->

				<div class="information-footer-column">
					<h4>ESTACIONES NUEVAS</h4>
                                        
                                        <div style="text-align: left; padding-left:95px;">
                                            
                                            <?php 
                                        
                                            foreach($result as $rs){
                                                echo "<a href=\"javascript: setPlayerBox('mainPlayer','".$rs['station_streaming']."', true,'".$rs['station_name']."' );\">".$rs['station_name']."</a>";
                                                echo "<br/>";                                                
                                            }
                                        
                                            ?>
                                            
                                        </div>
					
				</div>

				<div class="information-footer-column">
					<h4>ESTACIONES MAS ESCUCHADAS</h4>
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
				</div>

				<div class="information-footer-column">
					<h4>ESTACIONES MAS ESCUCHADAS</h4>
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
					<br/>
					la ke buena 102.7
				</div>

			</div> <!-- end information-footer -->
