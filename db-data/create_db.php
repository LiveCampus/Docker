<?php
   $dbhost = 'mysql';
   $dbuser = 'root';
   $dbpass = '123456';
   $conn = new mysqli($dbhost, $dbuser, $dbpass);
   
   if($conn->connect_error ) {
      die('Could not connect: ' . $conn->connect_error);
   }
   
   echo "Connected successfully\n";
   
   $sql = 'CREATE Database test_db';
   $retval = $conn->query( $sql );
   
   echo  "Database test_db created successfully\n";

   if(! $retval ) {
      die('Could not create database: ' . $conn->error);
   }
?>
