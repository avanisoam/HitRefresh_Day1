<?php
   //Creating a connection
   include 'config.php';

   //Executing the multi query
   $query = "SELECT * FROM user_register";
 
   //Retrieving the records
   $res = mysqli_query($conn, $query, MYSQLI_USE_RESULT);
   if ($res) {
      while ($row = mysqli_fetch_row($res)) {
         print_r($row);
         die();
         print("Name: ".$row[0]."\n");
         print("Age: ".$row[1]."\n");
      }
   }

   //Closing the connection
   mysqli_close($conn);
?>