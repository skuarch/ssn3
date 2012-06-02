<?php require_once 'noCache.php' ?>
<!DOCTYPE html>
<html>
    
    <head>
        
        <script src="js/jquery-1.7.1.js" ></script>	
	<script src="js/jquery.corner-2.12.js" ></script>        
        <script src="js/readyAddStation.js" ></script>
        <script src="js/addStation.js" ></script>
        
        <link rel="stylesheet" href="css/default.css" type="text/css"/>
        
        <title>escucharadio</title>
    </head>
    
    <body oncontextmenu="return false;">
        
        <div class="wrapper"> <!-- wrapper -->
            
            <?php require_once 'header.php' ?>
            
            <div id="container" class="container"> <!-- container -->
                
                <div id="warning" class="warning">                    
                    En esta pagina puedes agregar tu estacion favorita
                </div>
                
                <br/>
                
                <form name="addStationForm" id="addStation" action="javascript:addStation(document.addStationForm)" method="post">
                    
                    <table>
                        
                        <tbody>
                            <tr>
                                <td>
                                    Nombre de la estacion 
                                </td>
                                <td>
                                    <input type="text" id="station_name" name="station_name"/>
                                </td>
                                
                                <tr>
                                    <td>
                                        Freciencia
                                    </td>
                                    <td>
                                        <input type="text" id="station_frecuencie" name="station_frecuencie" />
                                    </td>                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        Estado
                                    </td>
                                    <td>
                                        <input type="text" id="station_state" name="station_state" />
                                    </td>                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        Pais
                                    </td>
                                    <td>
                                        <input type="text" id="station_contry" name="station_contry" />
                                    </td>                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        Descripcion
                                    </td>
                                    <td>
                                        <input type="text" id="station_description" name="station_description" />
                                    </td>                                    
                                </tr>
                                
                                <?php 
    
                                    require_once 'EscuchaRadioConnection.php'; 
    
                                    $connection = new EscuchaRadioConnection();
                                    $result = $connection->executeQuery("select genre_id, genre_name from genre order by genre_name asc");  
    
                                ?>
                                
                                <tr>
                                    <td>
                                        Genero
                                    </td>
                                    <td>
                                        <select id="station_genre" name="station_genre" > 
                                            <?php 
                                            
                                                foreach($result as $rs){                                                
                                                    echo "<option value='".$rs["genre_id"]."'>".$rs["genre_name"]."</option>";
                                                }
                                                
                                            ?>
                                        </select>
                                    </td>                                    
                                </tr>                                                                
                                <tr>
                                    <td>
                                        Acrominio
                                    </td>
                                    <td>
                                        <input type="text" id="station_acronym" name="station_acronym" />
                                    </td>                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        Pagina web
                                    </td>
                                    <td>
                                        <input type="text" id="station_website" name="station_website" />
                                    </td>                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        Keywords
                                    </td>
                                    <td>
                                        <input type="text" id="station_keywords" name="station_keywords" />
                                    </td>                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        Realplayer
                                    </td>
                                    <td>
                                        <input type="text" id="station_realplayer" name="station_realplayer" />
                                    </td>                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        Windows media
                                    </td>
                                    <td>
                                        <input type="text" id="station_windowsmedia" name="station_windowsmedia" />
                                    </td>                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        iTunes
                                    </td>
                                    <td>
                                        <input type="text" id="station_itunes" name="station_itunes" />
                                    </td>                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        flash
                                    </td>
                                    <td>
                                        <input type="text" id="station_flash" name="station_flash" />
                                    </td>                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        winamp
                                    </td>
                                    <td>
                                        <input type="text" id="station_winamp" name="station_winamp" />
                                    </td>                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        player
                                    </td>
                                    <td>
                                        <input type="text" id="station_player" name="station_player" />
                                    </td>                                                                        
                                </tr>
                                <tr>
                                    <td>
                                        Streaming
                                    </td>
                                    <td>
                                        <input type="text" id="station_streaming" name="station_streaming" />
                                    </td>                                    
                                </tr>
                        </tbody>
                        
                    </table>
                    
                    <input type="submit" value="guardar" />
                    
                </form>
                
            </div> <!-- end container -->
            
            <?php require_once 'information-footer.php'; ?>
            <?php require_once 'footer.php' ?>
            
        </div> <!-- end wrapper -->
        
    </body>
    
</html>
