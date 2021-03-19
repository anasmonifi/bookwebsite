<?php

?>
<html >
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>sersh</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.js"></script>
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body >

<div id="sersh1">

<div id="sersh2">

<div  id="sershmunue">

<ul>  
<li><a href="m.php"> الصفحة الرئيسية</a>
                    </li>
                    <li><a href="#services">مواعيد الزيارة</a>
                    </li>
                    <li><a href="#Parallax-one">مخطط المعرض</a>
                    </li>
                     <li><a href="#price-sec">اهم المواقع</a>
                    </li>
                     <li><a href="#Parallax-two">موقع  المعرض</a>
                    </li>

                   <li><a href="search.php">البحث</a>
                      </li>
                  <li><a href="publishing house.php ">دار النشر</a>
                    </li>
                    
                 
</ul> 
</div>
</div>
<div id="sersh3">
<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<table  border=0 align="right" dir="rtl" id="table_ser"   cellspacing="0" cellpadding="0" > 
<tr>
 <td >
  <h4>   خيارات البحث </h4>

 </td>
 <td> <input type="radio" name="sershtextradio" value="Md" size="20" id="gm" />  <label for="gm">&nbsp;اسم الكتاب</label> </td>
    <td> &nbsp;&nbsp;<input type="radio" name="sershtextradio" value="Mm" size="20" id="gmm" />  <label for="gmm"> &nbsp;اسم المؤالف</label> </td>
 <td> <input type="radio" name="sershtextradio" value="dr" size="20" id="gmm" />   <label for="gmm"> &nbsp;  اسم دار النشر</label> </td>
 
 

  
   <td>  <input type="text" name="email" size="30"  >      </td>

      <td>  &nbsp; <input id="sershBottt"  type="submit" name="botsersh" value="ابحث " /></td>
<td> &nbsp;<input type="reset" id="sershBottt2" onclick="location.href='search.php';" value="الغاء" name="botsersh2" /></td>
</tr>

</table>
 
</form>
 



<form  >

<table     border=2 align="right" dir="rtl"  style=" background-color:wheat;" cellspacing="15" cellpadding="0" id ="enmn" > 
<tr  id="dear1table1 " border=2>
     <td style="color:#000; font-size:22px; " >  &nbsp; &nbsp; اسم الكتاب  </td>
     <td style="color:#000; font-size:22px; " >   &nbsp; &nbsp; اسم المولف </td>
     <td style="color:#000; font-size:22px; " >   &nbsp; &nbsp; اسم التصنيف  </td>
     <td style="color:#000; font-size:22px; " >   &nbsp;  اسم دار النشر</td>
     <td style="color:#000; font-size:22px; ">   &nbsp; &nbsp; تاريخ النشر </td>
 
     <td style="color:#000; font-size:22px; " >   &nbsp; &nbsp; سعر الكتاب </td>
     <td  style="color:#000; font-size:22px; ">   &nbsp; &nbsp; حول الكتاب </td>
     <td  style="color:#000; font-size:22px; ">   &nbsp; &nbsp; صور ة الكتاب </td>
     <td  style="color:#000; font-size:22px; ">   &nbsp; &nbsp;  التعليقات </td>
    


</tr>

<?php
/**
 * Get the data
 */
require 'connect.php';
 
 
if (isset($_GET["email"])) {

 $sam= $_GET["email"];
 if (isset($_GET["sershtextradio"])) {
  $wow=$_GET["sershtextradio"];
 switch ($wow) {
     case "Md":
     $sql = "SELECT * FROM `books` p ,`der_ansher` u WHERE u.id=p.UserId and nameB='$sam' ";
         break;
     case "Mm":
     { $sql = "SELECT * FROM `books` p ,`der_ansher` u WHERE u.id=p.UserId and NameFT='$sam' ";}
         break;
     case "dr":
     { $sql = "SELECT * FROM `books` p,`der_ansher` u WHERE u.department= '$sam' and u.id=p.UserId";}
         break;
     default:
     $sql = "SELECT * FROM `books` p ,`der_ansher` u WHERE u.id=p.UserId";
 }
}
else
{
  $sql = "SELECT * FROM `books` p ,`der_ansher` u WHERE u.id=p.UserId  ";
}
}
  else
  {
    $sql = "SELECT * FROM `books` p ,`der_ansher` u WHERE u.id=p.UserId  ";
  }
     
 

if($result = mysqli_query($con,$sql))
{
 
  while($row = mysqli_fetch_assoc($result))
  {
   ?> 
  <tr border=2>
      <td style="color:#000; font-size:17px; " >&nbsp; &nbsp;   <?php echo $row['nameB']; ?>  </td> 
    <td style="color:#000; font-size:17px; ">&nbsp; &nbsp;  <?php echo $row['NameFT']; ?>   </td> 
       <td style="color:#000; font-size:17px; ">&nbsp; &nbsp;  <?php echo $row['adddearts']; ?>   </td> 
    <td style="color:#000; font-size:17px; ">&nbsp; &nbsp;  <?php echo $row['department']; ?>   </td> 
  <td>&nbsp; &nbsp;   <?php echo $row['addedDate']; ?>  </td> 
      <td style="color:#000; font-size:17px; ">&nbsp; &nbsp;    <?php echo $row['price']; ?>  </td> 
       <td style="color:#000; font-size:17px;  ">&nbsp; &nbsp;  <?php echo $row['description']; ?>   </td> 
     <td> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<img src="<?php echo $row['img']; ?> " alt="Girl in a jacket" style="width:100px;height:120px; "  ></td>
   <td  style="  font-size:20px;  background-color:#cd853f; border-radius:30px; border:0px; border: 0px #900027 solid 2px; text-align:-webkitmatch-parent; "> 
    <a    name="edit" href="AddComments.php?id=<?php echo $row['Id']; ?>" >  &nbsp;&nbsp;  <font color=" #000 " > &nbsp;اضافة تعليق </font>  </a></td> 
    
            </tr>
        <?php
   $id= $row['Id'];
   $sql2 = "SELECT * FROM `anas`.`comments` where f_id='$id '";

$result2 = mysqli_query($con,$sql2);
$row2;
 
  while($row2 = mysqli_fetch_assoc($result2))
  {
    ?> 
    <tr border=2>
        <td style="color:#000; font-size:13px; background-color:#cd853f; border-radius:10px; border:0px; border: 0px #900027 solid 2px;    "  >&nbsp; &nbsp;   <?php echo $row2['name2']; ?>  </td> 
      <td style="color:#000; font-size:13px; background-color:#cd853f; border-radius:10px; border:0px; margin-top: 5px; ">&nbsp; &nbsp;  <?php echo $row2['details']; ?>   </td> 
    <td style="color:#000; font-size:13px; background-color:#cd853f; border-radius:10px; border:0px;  ">&nbsp; &nbsp;   <?php echo $row2['DateAdd']; ?>  </td> 
 
              </tr>
          <?php
  }
  

  }
}
 ?>

 
 


 


</table>
 
</form>

  

  </div>
  

      </div>   

  </div>

</div>


    



</body>
</html>
