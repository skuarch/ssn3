<?php
    require_once 'EscuchaRadioConnection.php';
    $connection = new EscuchaRadioConnection();
    $result = $connection->executeQry("select * from stations");
    $i = 1;
?>
<table style="">
    <tbody>
        <tr>
            <?php 
                foreach($result as $rs){
                    if($i==7){                            
                        echo "<tr>";                            
                    }
                    ?>
                        <td>    
                            <div class="stationMiniBox">                                
                                <a href="javascript:setPlayerBox('mainPlayer', '<?php echo $rs['station_streaming'] ?>',true, '<?php echo $rs['station_name'] ?>');"><?php echo $rs['station_name'] ?></a>
                            </div>
                        </td>    
                    <?php
                    
                    $i++;
                        
                    if($i==7){                            
                        echo "</tr>";                                                        
                        $i=1;
                    }
                }                                
            ?>
    </tbody>
</table>