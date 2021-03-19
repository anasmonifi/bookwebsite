<?php
/**
 * Store the new data
 */
 
 
require 'connect.php';
// Get the posted data.
 
      // Extract the data.
 
     	$name = $_POST['name'];
	$NameFT = $_POST['NameFT'];
	 $adddearts = $_POST['adddearts'];
 	$addedDate =date("Y/m/d") ;
		$description = $_POST['description'];
    $price = $_POST['price'];
    $id = $_POST['id'];
    


    $sql = "UPDATE `anas`.`books` SET ";
 
	
    $sql.= "`nameB`='$name',`adddearts`='$adddearts',`description`='$description',
    `price`='$price',`addedDate`='$addedDate',
     `NameFT`='$NameFT'  ";

   
	$sql.= "WHERE `Id` = '{$id}' LIMIT 1";

    mysqli_query($con,$sql);
    header ("Location: House2.php");
?>