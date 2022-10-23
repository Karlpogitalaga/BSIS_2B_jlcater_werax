<?php 
  include 'connection.php';

  if(isset($_POST['sign-up']))
  {
    $fname = $_POST['Name'];
    $midname = $_POST['Username'];
    $lname = $_POST['Password'];
    $email = $_POST['Confirm Password'];

    $query = "INSERT INTO users_info (Name,Username,Password,Confirm Password) 
    VALUES ('$Name,'$Username','$Password','$Confirm Password')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header("Location: registration.php");
    }
