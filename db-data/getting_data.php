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

   $sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';

   $result = $conn->query( $sql );
   
   if(! $result ) {
      die('Could not get data');
   }
   
   while($row = $result->fetch_array(MYSQLI_NUM)) {
      echo "EMP ID :{$row[0]}  <br> ".
         "EMP NAME : {$row[1]} <br> ".
         "EMP SALARY : {$row[2]} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully<br/>";
?>
