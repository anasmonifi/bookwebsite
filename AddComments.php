<?php


?>



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
<form  method="post" action="update.php">
<table   border=0 align="right" dir="rtl"  cellspacing="0" cellpadding="4" > 

    
<?php
/**
 * Get the data
 */
require 'connect.php';
$id=$_GET["id"];
  
 
$sql = "SELECT * FROM `anas`.`books` where id='{$id}' ";

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
<td>&nbsp; &nbsp; <input type="text" name="NameFT" size="30"value="<?php echo $row['NameFT']; ?> "   /></td>



</tr>

 

        <?php
   
 
}
}

?>


</tr>
</table>
</form>

<form  method="post" action="comments.php">
 <table  border=0 align="right" dir="rtl" id="table_ser3" cellspacing="3" cellpadding="8" >
<tr  >
<input type="hidden" value="<?php echo $_GET["id"]; ?> "    name="id"  / >
 
<td > <font color=" #985C27 " size="5"   style="  "> اضافة  تعليق</font> </td>
  <td> &nbsp; <input  type="text" name="name2" size="30" placeholder=" الاسم"/></td>
  <td> &nbsp; <input type="email" name="email" size="30"  placeholder="   البريد" /></td>
  <td> &nbsp; <textarea name="details" placeholder=" التعليق" cols=28 rows=4>  </textarea></td>
 
  <td> &nbsp;<button id="sershBottt2" value="" name="botsersh3" > اضافة  تعليق</button></td>
   <td> &nbsp;<input type="reset" id="sershBottt2" onclick="location.href='search.php';" value="الغاء" name="botsersh4" /></td>
</tr>

</table>
</form>


 
 </div>


 <div id="top12">
 
  

</div>
<div id="top-5">
  <div id="do-footer">جميع الحقوق  محفوظة لموقع معرض الكتاب </div>
</div>

</div>







</body>
</html>
