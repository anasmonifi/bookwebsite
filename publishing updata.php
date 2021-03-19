<?php
//login.php
 
if(!isset($_COOKIE["type"]))
{
  header ("Location: publishing house.php");
}
?>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-- ةعسششح>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html >
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>dearupdat</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
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
<li> <a href="m.php">الصفحة الرئيسية</a> </li>
<li> <a href="search.php"> البحث </a> </li>
<li> <a href="publishing house.php">   دار النشر </a> </li>
<li> <a href="">  موقع المعرض</a> </li>
<li> <a href="">  مخطط المعرض  </a> </li>
<li> <a href="">  مواعيد الزيارة  </a> </li>
<li> <a href=""> من نحن  </a> </li>
<li> <a href="logout.php"> تسجيل الخروج  </a> </li>
</ul> 
</div>
</div>
<div   id="top-7">
<form   method="post" action="save.php">
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
 
  
<form  method="post" action="update.php">
<table   border=0 align="right" dir="rtl"  cellspacing="0" cellpadding="4" > 

    
<?php
/**
 * Get the data
 */
 
$id=$_GET["id"];
  
 
$sql = "SELECT * FROM `anas`.`books` where Id='{$id}' ";

if($result = mysqli_query($con,$sql))
{
 
  while($row = mysqli_fetch_assoc($result))
  {
   ?> 
  


<tr>
<input type="hidden" value="<?php echo $row['Id']; ?> "    name="id" size="30"  / >
 
</tr>
    
<tr>

<td><h3>&nbsp; &nbsp; اسم الكتاب :</h3></td>
<td>&nbsp; &nbsp; <input type="text" name="name" value="<?php echo $row['nameB']; ?> " size="30"  /></td> 
<td><h3>&nbsp; &nbsp; اسم المؤالف :</h3></td>
<td>&nbsp; &nbsp; <input type="text" name="NameFT" size="30" value="<?php echo $row['NameFT']; ?> "   /></td>



</tr>




<tr>
    <td><h3>&nbsp; &nbsp; اسم التصنيف :</h3></td>
<td>&nbsp; &nbsp; <input type="text" name="adddearts" size="30" value="<?php echo $row['adddearts']; ?> "  /></td> 
<td><h3>&nbsp; &nbsp; سعر الكتاب :</h3></td>
<td>&nbsp; &nbsp; <input type="text" name="price" size="30" value="<?php echo $row['price']; ?> "  /></td>

</tr>

<tr>
    <td><h3>&nbsp; &nbsp; تاريخ النشر :</h3></td>
<td>&nbsp; &nbsp; <input type="date" name="addedDate" value="<?php echo $row['addedDate']; ?> "  size="30"  /></td> 
<td><h3>&nbsp; &nbsp; حول الكتاب :</h3></td>
<td>&nbsp; &nbsp; <input  type="text" name="description" value="<?php echo $row['description']; ?> "   size="50"></input></td>
<td><h3>&nbsp; &nbsp;</h3></td>

</tr>



<tr> <td><h3>&nbsp; &nbsp; صورة الكتاب :</h3></td> <td><td>&nbsp; &nbsp; <input type="file"   value="<?php echo $row['img']; ?> "  id="fileToUpload" size="30"  /></td> </td></tr>

<tr>
  
<td>&nbsp; &nbsp; <input  name="boudar" id="Botttadd"  type="submit" value="تعديل البيانات  " / > </td>
 
<td>&nbsp; &nbsp; <input type="reset" id="Botttupdate" onclick="location.href='House2.php';"  value="الغاء" name="butexit" / > </td>
 

        <?php
   
 
}
}

?>


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
