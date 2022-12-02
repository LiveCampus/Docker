<?php
   $dbhost = 'mysql';
   $dbuser = 'root';
   $dbpass = '123456';
   $conn = new mysqli($dbhost, $dbuser, $dbpass);
   
   if($conn->connect_error) {
      die('Could not connect: ' . $conn->connect_error);
   }
   
   echo "Connected successfully<br/>";
   
   $sql = 'DROP Database test_db';

   $conn->query( $sql );
   
   echo  "Database test removed successfully<br/>";
?>
