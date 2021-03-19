<?php
/**
 * Store the new data
 */
 
 require 'connect.php';
// Get the posted data.
 
      // Extract the data.
 
     	$name2 = $_POST['name2'];
	$details = $_POST['details'];
		$DateAdd =date("Y/m/d") ;
  
		$id = $_POST['id'];
	$email = $_POST['email'];
 
  
  
    $sql = "INSERT INTO `anas`.`comments` (`id`, `f_id`, `name2`, `details`, `DateAdd`, `email` )
    VALUES (NULL,  '$id', '$name2', '$details', '$DateAdd', '$email' );";
    
       
 if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);
 	 
    header ("Location: search.php");
// 	  $json = json_encode($last_id); 
// echo $json;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}













   