<html>
   
   <head>
      <title>Delete a Record from MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['delete'])) {
            $dbhost = 'mysql';
            $dbuser = 'root';
            $dbpass = '123456';
            $conn = new mysqli($dbhost, $dbuser, $dbpass);

            if($conn->connect_error) {
               die('Could not connect: ' . $conn->connect_error);
            }

            echo "Connected successfully<br/>";

            $conn->select_db("test_db");
				
            $emp_id = $_POST['emp_id'];
            
            $sql = "DELETE FROM employee WHERE emp_id = $emp_id" ;

            $conn->query( $sql );
            
            echo "Deleted data successfully<br>";
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
                        <td width = "100">Employee ID</td>
                        <td><input name = "emp_id" type = "text" 
                           id = "emp_id"></td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "delete" type = "submit" 
                              id = "delete" value = "Delete">
                        </td>
                     </tr>
                     
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>
