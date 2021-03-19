<?php
/**
 * Store the new data
 */?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require 'connect.php';
// Get the posted data.
 
      // Extract the data.
 
     	$name = $_POST['username'];
	$department = $_POST['department'];
		$email = $_POST['email'];
 	$password = $_POST['password'];
		$type = $_POST['contery'];
    $anthor = $_POST['phone'];
    $status="disactive";
    $AddDat=date("Y/m/d") ;
   $sql = "INSERT INTO  der_ansher (`id`, `name`, `department`, `anthor`, `password`,   `AddDate`,  `email`, `type`, `status`) 
   VALUES (NULL, '$name','$department','$anthor','$password', '$AddDat', '$email','$type','$status')";
   
       
 if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);
 
   
 
 echo  "الرجاء الانتظار حتى يتم الموافقة على طلبك";
 header( "Refresh:5;  publishing house.php", true, 303);
// 	  $json = json_encode($last_id); 
// echo $json;
} else {
  echo  "انت مسجل من قبل ";
  header( "Refresh:1;  publishing house.php", true, 30);
}







 



   