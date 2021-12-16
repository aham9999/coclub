<?php
include 'connection.php';
$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $mobileno = $_POST["mobileno"];
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password); 

    echo $username;
    echo '<br>';
    echo $password;
    echo'</br>';
    echo $cpassword;

   if($password==$cpassword){
    $sql = "INSERT INTO login (id, username, password, mobileno) VALUES ('NULL', '$username', '$password', '$mobileno')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"succesfull inserted";
    }
    else{
        echo"not instered ";
        mysqli_error(($con));
    }
     $result= mysqli_query($con,$sql);
     if ($result){
         $showAlert=true;
     } 
     
   }
   else{
    $showError="pasword not matched";
}  
 

}

?>