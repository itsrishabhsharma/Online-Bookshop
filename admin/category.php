
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
			<div class="entry" style="min-height:400px">
				<form action='process_addcategory.php' method='POST'>
						<b style="color:darkgreen">ADD CATEGORY </b>
							<br/>
							<input type='text' name= 'cat' size='25'>
							
							<input type='submit'  value='  ADD  '>
							
							<br><br>
				</form>
				<hr>
				<form action='process_addsubcategory.php' method='POST'>
							
							
							
									
							
							
						<b style="color:darkgreen">DELETE CATEGORY </b>						
							<br>
								<select name="del">
									<option>Architecture<option>Art And Culture<option>Forest<option>Sports<option>Astrology<option>Business<option>Economics<option>Low Books<option>Tourism<option>Yoga<option>Religion<option>Management<option>Terrorism<option>Tracking<option>Fiction<option>Comics<option>Computer<option>Cooking<option>Science<option>Compititive Exam<option>tess								</select>
						
							
							<input type='submit' value='  DELETE  '>
				</form>

				<form action='process_delsubcategory.php' method='POST'>
							<hr>
						
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
