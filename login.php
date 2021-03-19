<?php
//login.php

include("database_connection.php");

if(isset($_COOKIE["type"]))
{
    header ("Location: House2.php");
}

 ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$message = '';
$hash=$_POST["user_password"];
$status="active";
//$hash = md5($password);
if(isset($_POST["login"]))
{
 if(empty($_POST["user_email"]) || empty($_POST["user_password"]))
 {
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
  $query = "
  SELECT * FROM der_ansher 
  WHERE email = :user_email
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    'user_email' => $_POST["user_email"]
   )
  );
  $count = $statement->rowCount();
  if($count > 0)
  {
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
    if($hash== $row["password"] )
    {
        if( $status== $row["status"])
        {
       
     setcookie("type", $row["id"], time()+3600, "/");
     header ("Location: House2.php");
    }
    else
    {
        
?>
   <div class="alert alert-danger">لم يتم قبول طلبك بعد  </div> 
   <?php
     header( "Refresh:1;  publishing house.php", true, 30);
    }
}
    else
    {
        
?>
   <div class="alert alert-danger"> خطاء في كلمة السر</div> 
   <?php
     header( "Refresh:1;  publishing house.php", true, 30);
    }
   }
  }
  else
  { 
    ?>
    <div class="alert alert-danger"> خطاء في  البريد   </div> 
    <?php
      header( "Refresh:1;  publishing house.php", true, 30);
      }
 }
}


?>

 