<?php
   $dbhost = 'mysql';
   $dbuser = 'root';
   $dbpass = '123456';
   $conn = new mysqli($dbhost, $dbuser, $dbpass);
   
   if($conn->connect_error) {
      die('Could not connect: ' . $conn->connect_error);
   }
   
   echo "Connected successfully<br/>";

   $conn->select_db("test_db");

   $sql = 'CREATE TABLE employee( '.
      'emp_id INT NOT NULL AUTO_INCREMENT, '.
      'emp_name VARCHAR(20) NOT NULL, '.
      'emp_address  VARCHAR(20) NOT NULL, '.
      'emp_salary   INT NOT NULL, '.
      'join_date    timestamp(6) NOT NULL, '.
      'primary key ( emp_id ))';

   $conn->query( $sql );

   echo "Table employee created successfully<br/>";
?>
