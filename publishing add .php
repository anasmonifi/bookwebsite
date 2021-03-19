<?php
//login.php
 
if(!isset($_COOKIE["type"]))
{
  header ("Location: publishing house.php");
}
?>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>dearAdd</title>
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
    
    
</head>
<body>
<div id="top-11">
<div id="top-2">
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
<div   id="top-7">
<form  NAME ="form1" METHOD ="POST" ACTION ="save.php" >
<table  border=0 align="right" dir="rtl"  cellspacing="15" cellpadding="0" > 

<?php
/**
 * Get the data
 */
require 'connect.php';
 
 
$UserId =$_COOKIE["type"];
$sql = "SELECT * FROM `anas`.`der_ansher` where id='{$UserId}' ";

if($result = mysqli_query($con,$sql))
{
 
  while($row = mysqli_fetch_assoc($result))
  {
   ?> 
  <tr >
 <td >
 <h3>  &nbsp; &nbsp; اسم المستخدم :</h3> 

 </td>
 <td>  &nbsp; &nbsp;   <?php echo $row['name']; ?>  </td>
 <td> <h3>&nbsp; &nbsp; الموقع</h3></td>
  <td>   &nbsp; &nbsp;   <?php echo $row['type']; ?> </td>
   <td> <h3>&nbsp; &nbsp; دار النشر</h3>         
      </td>
      <td> &nbsp; &nbsp;  <?php echo $row['department']; ?>  </td>


 </tr>
    
        <?php
   
 
  }
}

 ?>

 </table>
 </form>
</div>



<div id="top12">
<form  NAME ="form1" METHOD ="POST" ACTION ="save.php" enctype="multipart/form-data">
<table  border=0 align="right" dir="rtl"  cellspacing="15"; cellpadding="0"; > 
    
<tr>

<td><h3>&nbsp; &nbsp; اسم الكتاب :</h3></td>
<td>&nbsp; &nbsp; <input type="text" name="name" size="30"  /></td> 
<td><h3>&nbsp; &nbsp; اسم المؤالف :</h3></td>
<td>&nbsp; &nbsp; <input type="text" name="NameFT" size="30"  /></td>



</tr>




<tr>
    <td><h3>&nbsp; &nbsp;  اسم التصنيف :</h3></td>
<td>&nbsp; &nbsp; <input type="text" name="adddearts" size="30"  /></td> 
<td><h3>&nbsp; &nbsp; سعر الكتاب :</h3></td>
<td>&nbsp; &nbsp; <input type="text" name="price" size="30"  /></td>

</tr>

<tr>
    <td><h3>&nbsp; &nbsp; تاريخ النشر :</h3></td>
<td>&nbsp; &nbsp; <input type="date" name="addedDate" size="30"  /></td> 
<td><h3>&nbsp; &nbsp; حول الكتاب :</h3></td>
<td>&nbsp; &nbsp; <textarea name=" description" cols=45 rows=7></textarea></td>

</tr>



<tr>
    <td><h3>&nbsp; &nbsp; صورة الكتاب :</h3></td>
<td>&nbsp; &nbsp;  <input type="file" name="fileToUpload" id="fileToUpload"> </td> 
 <td>&nbsp; &nbsp; <input  name="boudar" id="Botttadd"  type="submit" value="اضافة كتاب " / > </td>
  <td>&nbsp; &nbsp; <input type="reset"  onclick="location.href='House2.php';" id="Botttadd" value="الغاء" name="bosearsh2" /> </td> 
 

</tr>
</table>
</form>
</div>







    





<div id="top-5">
  
<div id="do-footer">جميع الحقوق  محفوظة لموقع معرض الكتاب </div>
</div>
  
  </div>
  



</body>
</html>