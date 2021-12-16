<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/fulldet.css" rel="stylesheet" type=text/css>
    <title>Document</title>
</head>
<body>
    


<?php
   include('connection.php');
   
 
   $sql = 'SELECT * FROM events';  
   $retval=mysqli_query($con, $sql);  
     
   if(mysqli_num_rows($retval) > 0){  
    while($row = mysqli_fetch_assoc($retval)){  
         
            "--------------------------------<br>";  
     echo"<h3> EMP ID :{$row['id']}  <br> </h3>";
     echo"<p>Event Name :{$row['event_name']}</p>";
     echo"<p>Event Details : {$row['content']} <br> </p>";
     $filename = "images/{$row['images']}";
     
     echo"<img src='$filename' alt='hello' width='300px' height='200px' />";
    } //end of while  
   }else{  
   echo "0 results";  
   }  

   ?>
</body>
</html>