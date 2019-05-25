<?php
    // USE NUMERIC IP!!! SRV NOT SUPPORTED!
	// QUERY CONFIG
    // Edit this ->
    define( 'MQ_SERVER_ADDR', '82.208.17.17' );
    define( 'MQ_SERVER_PORT', 27841 );
    define( 'MQ_TIMEOUT', 1 );
    // Edit this <-

	
	// DO NOT EDIT
    // Display everything in browser, because some people can't look in logs for errors
    Error_Reporting( E_ALL | E_STRICT );
    Ini_Set( 'display_errors', true );

    require 'query/minecraft/MinecraftQuery.class.php';

    $Timer = MicroTime( true );

    $ServerQuery = new MinecraftQuery( );

    try
    {
        $ServerQuery->Connect( MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT );
    }
    catch( MinecraftQueryException $e )
    {
        $Exception = $e;
    }

    $Timer = Number_Format( MicroTime( true ) - $Timer, 4, '.', '' );

    $serverInfo = $ServerQuery->GetInfo();
?>
<?php 
// Website Configuration \\
 define( 'name', 'Website Name' );
 define( 'serverip', 'play.softcraft.eu');
 define( 'background', '/img/background.png');
 define( 'logo', '/img/logo.png');
 // To change favicon, replace favicon.ico in main folder
?>