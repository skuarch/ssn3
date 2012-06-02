<?php 

    require_once 'EscuchaRadioConnection.php';
    $connection = new EscuchaRadioConnection();
    $result = $connection->executeQuery("select * from stations where station_streaming <> '' order by station_id desc limit 2");

?>

<div id="lastStation" class="lastStation"> <!-- lastStation -->
    
    <b>ESTACIONES NUEVAS</b>
    
</div> 

<div class="box-content">
    
    
    <b><?php echo $result[0][1] ?></b>
    <br/>
    <br/>
    
<object 
    ID="lastStation1" 
    WIDTH="326" 
    HEIGHT="65" 
    CLASSID="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95"
    STANDBY="Loading Player components..." 
    TYPE="application/x-oleobject">
    <param name="filename" VALUE="<?php echo $result[0][16] ?>">
    <param name="ShowControls" VALUE="true">
    <param name="ShowStatusBar" value="true">
    <param name="ShowDisplay" VALUE="false">
    <param name="autostart" VALUE="false">
    <embed 
        TYPE="application/x-mplayer2" 
        SRC="<?php echo $result[0][16] ?>" 
        NAME="MediaPlayer"
        WIDTH="326" 
        HEIGHT="65" 
        ShowControls="1"
        ShowStatusBar="1"
        ShowDisplay="0"
        autostart="0" 
    />
    
</object>
    
        <b><?php echo $result[1][1] ?></b>
    <br/>
    <br/>
    
<object 
    ID="lastStation2" 
    WIDTH="326" 
    HEIGHT="65" 
    CLASSID="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95"
    STANDBY="Loading Player components..." 
    TYPE="application/x-oleobject">
    <param name="filename" VALUE="<?php echo $result[1][16] ?>">
    <param name="ShowControls" VALUE="true">
    <param name="ShowStatusBar" value="true">
    <param name="ShowDisplay" VALUE="false">
    <param name="autostart" VALUE="false">
    <embed 
        TYPE="application/x-mplayer2" 
        SRC="<?php echo $result[1][16] ?>" 
        NAME="MediaPlayer"
        WIDTH="326" 
        HEIGHT="65" 
        ShowControls="1"
        ShowStatusBar="1"
        ShowDisplay="0"
        autostart="0" 
    />
    
</object>
    
    
</div> <!-- end lastStation -->


