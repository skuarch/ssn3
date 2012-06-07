<?php

/**
 * this class is for get the function that provides the handler
 *
 * @author skuarch
 */
class ErrorHandler {
    
    //==========================================================================
    function __construct() {        
    } // end __construct
    
    //==========================================================================
    function handler($errno, $errstr, $errfile, $errline){
        echo "el pinche error: " . $errstr;
        //send a mail
        return self;
    } // end getErrorHandler
    
} // end class

?>
