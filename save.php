<?php
/**
 * Store the new data
 */
 
 require 'connect.php';
// Get the posted data.
 
      // Extract the data.
 
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }










      // Check if file already exists
    
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {    
            $img = $target_file;
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          } else {
            $img = "";
              echo "Sorry, there was an error uploading your file.";
          }
        }
          $name = $_POST['name'];
          $NameFT = $_POST['NameFT'];
       $adddearts = $_POST['adddearts'];
           $addedDate = $_POST['addedDate'];
              $description = $_POST['description'];
          $price = $_POST['price'];
          $UserId =$_COOKIE["type"];
        
       //$json = json_encode($cars);
       //echo $json;

       
           // Store.
         $sql = "INSERT INTO `anas`.`books`
         (`Id`, `nameB`,`adddearts`, `description`, `isNew`, `addedDate`, `price`,`UserId`, `NameFT`, `img` ) VALUES (NULL, '$name', '$adddearts' , '$description', b'0', '$addedDate', '$price' , '$UserId', '$NameFT', '$img');";
         
             
       if (mysqli_query($con, $sql)) {
          $last_id = mysqli_insert_id($con);
            
          header ("Location: House2.php");
      // 	  $json = json_encode($last_id); 
      // echo $json;
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
      
if(isset($_POST["submit"]))
{
	$file = $_FILES['file']['tmp_name'];
	$handle = fopen($file, "r");
	$c = 0;
	while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
	{
		 $Id = $filesop[0];
          $nameB = $filesop[1];
          $description = $filesop[2];
         $isNew = $filesop[3];
          $agaddedDate = $filesop[4];
          $price = $filesop[5];
         $UserId = $filesop[6];
          $NameFT = $filesop[7];
          $img = $filesop[8];
		
		 $sql = "INSERT INTO `anas`.`books`
         (`Id`, `nameB`, `adddearts`,`description`, `isNew`, `addedDate`, `price`,`UserId`, `NameFT`, `img` ) VALUES (NULL, '$name','$adddearts' , '$description', b'0', '$addedDate', '$price' , '$UserId', '$NameFT', '$img');";
	}
	
		if($sql){
			echo "You database has imported successfully";
		}else{
			echo "Sorry! There is some problem.";
		}
}




 