<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");
/**
 * Get the data
 */
 
 
require 'connect.php';
// Get the posted data.
 
      // Extract the data.
  
      $uid=$_GET["id"];

      $sql3 = "DELETE FROM `anas`.`comments` WHERE `f_id` ='$uid' ";
 
      $result3 = mysqli_query($con,$sql3);
    
  // Sanitize.
 
   $sql2 = "DELETE FROM `ahmed`.`books` WHERE `Id` ='{$uid}' LIMIT 1";

  $result = mysqli_query($con,$sql2);
  header ("Location: House2.php");

 ?>