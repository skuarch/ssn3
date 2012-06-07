<?php 

class Connection {
    
        private $username;
        private $password;
        private $server;
        private $database;
        private $link;
    
	//======================================================================
        /**
         * create a instance.
         * @param username name of user
         * @param password password for access to database
         * @param server ip or host of database server
         * @param database name of database
         */
	public function __construct($username, $password, $server, $database){            
            
            $this->username = $username;
            $this->password = $password;
            $this->server = $server;
            $this->database = $database;
            
            //set_error_handler("errorHandler");
            
	} // end __contruct           
        
        //======================================================================
        private function errorHandler($errno, $errstr, $errfile, $errline){            
            $e = new ErrorHandler();
            $e->handler($errno, $errstr, $errfile, $errline);
        } // end errorHandler

	//======================================================================
	/**
         * get the connection to database.         
         * @return $link connection to database.
         */
	private function getConnection(){
            
            $this->link = mysql_connect($this->server, $this->username, $this->password) or die (mysql_error());            
            return $this->link;
            
	} // end getConnection        
        
        //======================================================================
        /**
         * select database
         */
        private function selectDataBase(){            
            mysql_select_db($this->database);
        } // end selectDataBase	
        
        //======================================================================
        private function closeConnection(){
            if($this->link != null){                
                mysql_close($this->link);
            }
            $this->link = null;
	} // end closeConnection
        
        //======================================================================
        /**
         * execute any sql statement.
         * @param $sql query
         * @return $array array with results 
         */
        public function executeQuery($sql){            
            
            $array = null;
            $this->getConnection();                 
            $this->selectDataBase();
            $result = mysql_query($sql, $this->link) or die (mysql_error());           
            
            while($tmp = mysql_fetch_array($result)){
                $array[] = $tmp;                
            }           
            
            $this->closeConnection();
            
            return $array;
        } // end executeQuery
        
        //======================================================================
        public function executeUpdate($sql){
            
            $this->getConnection();     
            $this->selectDataBase();
            mysql_query($sql);
            $this->closeConnection();
            
        }

} // end class

?>
