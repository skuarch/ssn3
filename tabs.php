<?php 

    require_once 'EscuchaRadioConnection.php';
    $connection = new EscuchaRadioConnection();
    $result = $connection->executeQry("select * from stations order by station_id desc");

?>

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
        <div style="overflow: auto; height: 400px;">
            <?php require_once 'allStations.php'; ?>
        </div>
    </div>
    <div id="tab2" class="tab_content">
        <p>This tab has icon in it.</p>
    </div>
    <div id="tab3" class="tab_content">
        <p>Suspendisse blandit velit eget erat suscipit in malesuada odio venenatis.</p>
    </div>
</div> <!-- / tabs_content_container -->