<?php

    if (!empty($_POST)) {

        require_once 'EscuchaRadioConnection.php';
        $connection = new EscuchaRadioConnection();
        
        $sql = "insert into stations ".
                "(station_name,".
                "station_frecuencie,".
                "station_state,".
                "station_contry,".
                "station_description,".
                "station_genre,".
                "station_acronym,".
                "station_website,".
                "station_keywords,".
                "station_realplayer,".
                "station_windowsmedia,".
                "station_itunes,".
                "station_flash,".
                "station_winamp,".
                "station_player,".
                "station_streaming)".
                "values (".
                "'".$_POST['station_name']."',".    
                "'".$_POST['station_frecuencie']."',".
                "'".$_POST['station_state']."',".
                "'".$_POST['station_contry']."',".
                "'".$_POST['station_description']."',".
                "'".$_POST['station_genre']."',".
                "'".$_POST['station_acronym']."',".
                "'".$_POST['station_website']."',".
                "'".$_POST['station_keywords']."',".
                "'".$_POST['station_realplayer']."',".
                "'".$_POST['station_windowsmedia']."',".
                "'".$_POST['station_itunes']."',".
                "'".$_POST['station_flash']."',".
                "'".$_POST['station_winamp']."',".
                "'".$_POST['station_player']."',".
                "'".$_POST['station_streaming']."'".
                ")";
        
        echo "Gracias por registrar una estacion";
        
        $connection->executeUpdate($sql);
    }
    
    //header("location: addStation.php");
    
?>