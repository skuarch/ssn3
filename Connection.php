<?php 

class Connection {
    
        private $errorHandler;
    
	//======================================================================
	function __contruct($errorHandler){
            $this->errorHandler = $errorHandler;
            set_error_handler("errorHandler");                      
	} // end __contruct
        
        //======================================================================
        private function errorHandler($errno, $errstr, $errfile, $errline){
            $this->errorHandler->handler($errno, $errstr, $errfile, $errline);            
        } // end errorHandler        

	//======================================================================
	/**
         * get the connection to database.
         * @param server ip or hostname
         * @param user name
         * @param password         
         * @return $link
         */
	function getConnection( $server, $username, $password){
            
            $link = mysql_connect($server, $username, $password);
            
            return $link;
            
	} // end getConnection
        
        
        //======================================================================
        /**
         * select database
         * @param database name
         */
        function selectDataBase($database){            
            mysql_select_db($database);
        } // end selectDataBase

	//======================================================================
        /**
         * close the connection safety.
         * @param $link 
         */
	function closeConnection($link){
            if($link != null){                
                mysql_close($link);
            }
	} // end closeConnection

} // end class

?>
