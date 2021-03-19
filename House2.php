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
    <title>dear1</title>
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
<body style="background-color: wheat;">
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
                    
                 
<li> <a href="logout.php"> تسجيل الخروج  </a> </li>

</ul> 
</div>
</div>


 <div id="top-7">
    
    
</a>
<form   method="post" action="save.php">
<table   id="tap" border=0 align="right" dir="rtl"  cellspacing="15" cellpadding="0" > 


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
    
    <div  align="center">
    <form  name="import" method="post" enctype="multipart/form-data">
    	<input class="btn btn-info" type="file" name="file" /></br>
        <input  class="btn btn-info" type="submit" name="submit" value="Submit" /> </br>
      <a   class="btn btn-info" href="SampleForm/SampleForm.xlsx" download>DownloadSampleForm</a> 
</form> </div>         
    
  <div id="top-8">
  <div  id="ma">

<ul>  


<li> <a  class="btn btn-info" href="publishing add .php">اضافة كتاب</a> </li>
   
 
</ul> 
 
</div>
 
 
  </div>
    
    <!--
  //import excel بواسطة اكسل ادخال البيانات  -->
<?php
	
require 'Classes/PHPExcel/IOFactory.php';

// Mysql database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anas";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["submit"]))
{
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
$exceldata = array();
//  Read your Excel workbook
try
{
   $handle = PHPExcel_IOFactory::identify($file);
    $objReader = PHPExcel_IOFactory::createReader($handle);
    $objPHPExcel = $objReader->load($file);
}
catch(Exception $e)
{
    die('Error loading file "'.pathinfo($file,PATHINFO_BASENAME).'": '.$e->getMessage());
}

//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();

//  Loop through each row of the worksheet in turn
for ($row = 2; $row <= $highestRow; $row++)
{ 
    //  Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
	
    //  Insert row data array into your database of choice here
	$sql = "INSERT INTO books 
         ( nameB, adddearts, description,  addedDate, price,UserId, NameFT,img )
			VALUES ( '".$rowData[0][0]."', '".$rowData[0][1]."',
           '".$rowData[0][2]."','".$rowData[0][3]."','".$rowData[0][4]."','".$rowData[0][5]."','".$rowData[0][6]."','".$rowData[0][7]."')";
	
	if (mysqli_query($conn, $sql)) {
		$exceldata[] = $rowData[0];
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
    mysqli_set_charset($conn, "utf8");
}

  
}



mysqli_close($conn);
?>
    
<!-- //end -->

  <div id="top-9">
 
  <font color=" #985C27 " style=" margin-left: 500px;" size="15" align="center" > &nbsp;بيانات البحث </font>
  <form   method="post" action="save.php" >
<table     border=2 align="right" dir="rtl"  cellspacing="15" cellpadding="0" id ="enmn" > 
<tr  id="dear1table1 " border=2>
     <td > <h3>  &nbsp; &nbsp; اسم الكتاب </h3> </td>
     <td > <h3>  &nbsp; &nbsp; اسم المولف</h3> </td>
   <td > <h3>  &nbsp; &nbsp;اسم التصنيف </h3> </td>
     <td > <h3>  &nbsp; &nbsp; تاريخ النشر</h3> </td>
     <td > <h3>  &nbsp; &nbsp; سعر الكتاب</h3> </td>
     <td > <h3>  &nbsp; &nbsp; حول الكتاب</h3> </td>
     <td > <h3>  &nbsp; &nbsp; صور ة الكتاب</h3> </td>
     <td > <h3>  &nbsp; &nbsp;عملية</h3> </td>
       <td > <h3>  &nbsp; &nbsp;عملية</h3> </td>


</tr>

<?php
/**
 * Get the data
 */
 
  
$UserId =$_COOKIE["type"];
$sql = "SELECT * FROM `anas`.`books` where UserId='{$UserId}' ";

if($result = mysqli_query($con,$sql))
{
 
  while($row = mysqli_fetch_assoc($result))
  {
   ?> 
  <tr border=2>
      <td >&nbsp; &nbsp;   <?php echo $row['nameB']; ?>  </td> 
    <td>&nbsp; &nbsp;  <?php echo $row['NameFT']; ?>   </td> 
       <td>&nbsp; &nbsp;  <?php echo $row['adddearts']; ?>   </td> 
  <td>&nbsp; &nbsp;   <?php echo $row['addedDate']; ?>  </td> 
      <td>&nbsp; &nbsp;    <?php echo $row['price']; ?>  </td> 
       <td>&nbsp; &nbsp;  <?php echo $row['description']; ?>   </td> 
       <td> &nbsp; &nbsp;<img src="<?php echo $row['img']; ?> " alt="Girl in a jacket" style="width:100px;height:100px;"  ></td>
 
       <td>&nbsp;&nbsp; &nbsp;&nbsp;<a name="edit"  style="color:#985C27; font-size:19px; " href="publishing updata.php?id=<?php echo $row['Id']; ?>" > تعديل</a></td> 
        <td> &nbsp;&nbsp;&nbsp;&nbsp; <a  name="delete" style="color:#985C27; font-size:19px; "  href="delete.php?id=<?php echo $row['Id']; ?>"  >حذف</a></td> 
        </tr>
        <?php
   
 
  }
}

 ?>

 
 
 
 


 


</table>
</form>

  

  </div>
  </div>

</body>


</html>