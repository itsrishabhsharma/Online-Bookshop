
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Book Store</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" /></head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="category.php">Category</a></li>
			<li><a href="subcategory.php">Sub_Category</a></li>
			<li><a href="all_book.php">Books</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
			
			<li><a href="../logout.php">Logout</a></li>			
		</ul>	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<marquee  direction="right" behavior="alternate"><h1>Book Store</h1></marquee>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title"></h1>
			<div class="entry">
				
				<form action='process_addsubcategory.php' method='POST'>
							<h1 style="color:darkgreen">ADD SUB-CATEGORY </h1>
							<br><br>
							<u style="color:darkgreen">PARENT CATEGORY </u>
									<br>
										<select  name="parent">
											<option value='1'>Architecture<option value='2'>Art And Culture<option value='3'>Forest<option value='4'>Sports<option value='5'>Astrology<option value='6'>Business<option value='7'>Economics<option value='8'>Low Books<option value='9'>Tourism<option value='10'>Yoga<option value='11'>Religion<option value='12'>Management<option value='13'>Terrorism<option value='14'>Tracking<option value='15'>Fiction<option value='16'>Comics<option value='17'>Computer<option value='18'>Cooking<option value='19'>Science<option value='20'>Compititive Exam<option value='21'>tess<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined variable: link in C:\wamp64\www\Book_store\admin\subcategory.php on line <i>56</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0019</td><td bgcolor='#eeeeec' align='right'>406520</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\Book_store\admin\subcategory.php' bgcolor='#eeeeec'>...\subcategory.php<b>:</b>0</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: mysqli_close() expects parameter 1 to be mysqli, null given in C:\wamp64\www\Book_store\admin\subcategory.php on line <i>56</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0019</td><td bgcolor='#eeeeec' align='right'>406520</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\Book_store\admin\subcategory.php' bgcolor='#eeeeec'>...\subcategory.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0179</td><td bgcolor='#eeeeec' align='right'>475368</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.mysqli-close' target='_new'>mysqli_close</a>
(  )</td><td title='C:\wamp64\www\Book_store\admin\subcategory.php' bgcolor='#eeeeec'>...\subcategory.php<b>:</b>56</td></tr>
</table></font>
										</select>
									
									<br>
							<u style="color:darkgreen">SUB-CATEGORY:</u>
									<br><br>
										<input type='text' name= 'subcat' size='25'>
										
										<input type='submit'  value='  ADD  '>
									
									<br><br>	
				</form>
				<hr>
				<form action='process_delcategory.php' method='POST'>
							
						
				<form action='process_delsubcategory.php' method='POST'>
						
						<b style="color:darkgreen">DELETE SUB CATEGORY </b>						
							<br>
								<select  name="subcatnm">
									<option>Architecture<option value='1'> ---> Architecture<option>Art And Culture<option value='2'> ---> Art And Culture<option>Forest<option value='3'> ---> Forest<option>Sports<option value='4'> ---> Sports<option>Astrology<option value='5'> ---> Astrology<option>Business<option value='6'> ---> Business<option>Economics<option value='7'> ---> Economics<option>Low Books<option value='8'> ---> Low Books<option>Tourism<option value='9'> ---> Tourism<option>Yoga<option value='10'> ---> Yoga<option>Religion<option value='11'> ---> Religion<option>Management<option value='12'> ---> Management<option>Terrorism<option value='13'> ---> Terrorism<option>Tracking<option value='14'> ---> Tracking<option>Fiction<option value='15'> ---> Fiction<option>Comics<option value='16'> ---> Comics<option>Computer<option value='17'> ---> Programming<option value='18'> ---> Database<option value='19'> ---> Web-Design<option value='20'> ---> Networking<option value='29'> ---> O.S.<option>Cooking<option value='22'> ---> Pasta<option value='23'> ---> Tea - Coffee<option value='24'> ---> Soup - Sauce<option value='25'> ---> Vegetarian Item<option>Science<option value='26'> ---> Physics<option value='27'> ---> Biology<option value='28'> ---> Medical<option>Compititive Exam<option value='33'> ---> CAT<option value='31'> ---> GMAT<option value='32'> ---> MBA<option value='34'> ---> BBA<option>tess<option value='35'> ---> test1<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined variable: link in C:\wamp64\www\Book_store\admin\subcategory.php on line <i>99</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0019</td><td bgcolor='#eeeeec' align='right'>406520</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\Book_store\admin\subcategory.php' bgcolor='#eeeeec'>...\subcategory.php<b>:</b>0</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: mysqli_close() expects parameter 1 to be mysqli, null given in C:\wamp64\www\Book_store\admin\subcategory.php on line <i>99</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0019</td><td bgcolor='#eeeeec' align='right'>406520</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\Book_store\admin\subcategory.php' bgcolor='#eeeeec'>...\subcategory.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0634</td><td bgcolor='#eeeeec' align='right'>492328</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.mysqli-close' target='_new'>mysqli_close</a>
(  )</td><td title='C:\wamp64\www\Book_store\admin\subcategory.php' bgcolor='#eeeeec'>...\subcategory.php<b>:</b>99</td></tr>
</table></font>
								</select>
						
							
							<input type='submit' value=' DELETE '>
				</form>	
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<div id="footer-wrap">
	<p id="legal">Design by Rishabh Sharma</p>
	</div></div>
<!-- end footer -->
</body>
</html>
