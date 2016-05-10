<?php  
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    require_once('constants.php');
    
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];

	if ((strcmp($uname,"sparse") == 0) && (strcmp($pwd,"sparse1234") == 0) ) {
        ob_start(); // ensures anything dumped out will be caught

        // do stuff here
        $url = DOMAIN.'home.html'; // this can be set based on whatever

        // clear out the output buffer
        while (ob_get_status()) 
        {
            ob_end_clean();
        }

        // no redirect
        header( "Location: $url" );
    }else{
        ob_start(); // ensures anything dumped out will be caught

        // do stuff here
        $url = DOMAIN.'index.html'; // this can be set based on whatever

        // clear out the output buffer
        while (ob_get_status()) 
        {
            ob_end_clean();
        }

        // no redirect
        header( "Location: $url" );
    }
?>