 
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>derALnasher</title>
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
<div id="top11">
	



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

  <div id="top-3">
  
 <form   method="post" action="login.php">
<table  border=0 align="right" dir="rtl"  cellspacing="15" cellpadding="0" > 
<tr >
 <td >
 <h3>  &nbsp; &nbsp; البريد الاكتروني :</h3> 

 </td>
 <td>  &nbsp; &nbsp; <input type="text" required name="user_email" size="30"  /> </td>
 <td> <h3>&nbsp; &nbsp; كلمة المرور :</h3></td>
  <td>   &nbsp; &nbsp; <input type="password" required name="user_password" size="30"    /     >    </td>
   <td>           &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 

   <input type="submit" name="login" id="login" class="btn btn-info" value="تسجيل الدخول" />
   
     </td>





 </tr>

 </table>
 </form>

  </div>
  <div id="top-4">
  <font color=" #985C27 " style=" margin-left: 500px;" size="30" align="center" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;بيانات التسجيل </font>
 <form   method="post" action="storeUsers.php">
<table  border=0 align="right" dir="rtl"  cellspacing="15"; cellpadding="0"; > 

<tr >
<input type="hidden" name="id" value="<?php echo $row['id']; ?> " size="20" id="gm" /> 

    <td>&nbsp; &nbsp;  <h3> &nbsp; &nbsp;اسم دار النشر :</h3></td>
    <td>&nbsp; &nbsp;&nbsp; &nbsp; <input type="text"  required name="department" size="35" /> </td>
    <td>&nbsp; &nbsp;&nbsp; &nbsp; <h3>&nbsp; &nbsp;الدولة:</h3></td>
    <td> &nbsp; &nbsp; &nbsp; &nbsp;<select  required name="contery"  >
<option value="Value 1"  selected="selected">اختـــــر الدولـــــــة</option>
 

<option value="Value 2" >اليمن</option>
  
<option value="العراق">العراق</option>
<option value="الامارات">الامارات</option>
<option value="الدوحة">الدوحة </option>
<option value="قطر">قطر</option>
<option value="ماليزيا">ماليزيا</option>
<option value="السعودية">السعودية</option>
<option value="البحرين">البحرين</option>
<option value="الكويت">الكويت</option>
<option value="مصر">مصر</option>
<option value="السودان">السودان</option>
<option value="فلسطين">فلسطين</option>
<option value="جيبوتي">جيبوتي </option>
<option value="لبنان">لبنان</option> 
</select> 
</td>
</tr>
<tr>
  <td >
 <h3>  &nbsp; &nbsp; اسم المستخدم :</h3> 

 </td>
 <td>  &nbsp; &nbsp; <input type="text" name="username" size="30"  /> </td>
 <td> <h3>&nbsp; &nbsp; كلمة المرور :</h3></td>
  <td>   &nbsp; &nbsp; <input type="password" required name="password" size="30"     /    >    </td>
</tr>
<tr>
    <td>&nbsp; &nbsp;&nbsp; &nbsp;<h3>&nbsp; &nbsp; الايميل :</h3></td>
    <td>&nbsp; &nbsp;&nbsp; &nbsp; <input type="email"  required name="email" size="35" /> </td>
    <td>&nbsp; &nbsp;&nbsp; &nbsp; <h3>&nbsp; &nbsp;الهاتف :</h3></td>
    <td> &nbsp; &nbsp;&nbsp; &nbsp; <input type="text" name="phone" size="35" /> </td>
</tr>
<tr>
 <td>&nbsp; &nbsp; <input  name="boudar" id="Botttadd"  type="submit" value=" انشاء حساب " / > </td>
<td>&nbsp; &nbsp; <input type="reset" id="Botttadd" value="الغاء" name="bosearsh2" /> </td> 
 </tr>
    
 
  </table>
 </form>
 

  </div>

  <div id="top-5">
  <div id="do-footer">جميع الحقوق  محفوظة لموقع معرض الكتاب </div>
</div>
  

  </div>

  </div>
</body>
</html>