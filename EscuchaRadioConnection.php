<?php

require_once 'Connection.php';

/**
 * Wrapper for connect to database.
 *
 * @author skuarch
 */
class EscuchaRadioConnection {

    private $username = "root";
    private $password = "vitalnoc";
    private $server = "localhost";
    private $database = "escucharadio";
    private $connection;
    

    //==========================================================================
    function __construct() {         
        $this->connection = new Connection($this->username, $this->password, $this->server, $this->database);                
    } // end __contruct

    //==========================================================================
    function executeQry($sql){
        
        return $this->connection->executeQuery($sql);         
        
    } // end executeQry
    
    //==========================================================================
    function executeUpdate($sql){        
        $this->connection->executeUpdate($sql);
    } // end executeUpdate
    
    
} // end class

?>
