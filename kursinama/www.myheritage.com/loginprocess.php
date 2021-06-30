<?php
include 'config.php';

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $userEmail = mysqli_real_escape_string($conn,$_POST['Email']);
    $userPassword = mysqli_real_escape_string($conn,$_POST['Passwords']);

    $sql = "SELECT * FROM user_register WHERE Email = '$userEmail' and Password = '$userPassword'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result , MYSQLI_ASSOC);
    //$avani = array_column($row , 'Name' , 'Id');
    //print_r($row['Name']);
    //die();
    //$active = $row['active'];
    //$userName = mysqli_real_escape_string($conn,$row[1]);;

    $count = mysqli_num_rows($result);
    if($count >= 1) {
        //session_register("userEmail");
        $_SESSION['login_user'] = $row['Name'];
        
        header("location: profile.php");
     }else {
        echo "Your Login Name or Password is invalid";
     }
}
?>

