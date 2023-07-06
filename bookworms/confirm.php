<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport"  content="width=device-width, initial-scale=1">
<title>Confirm Payment-bookwroms</title>
	<link rel="stylesheet" type="text/css" href="stylesheet for home page.css">
	<style>
	.Container {
	max-width: 1300px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px
}
.search-box
		{
			display: inline-flex;
			width: 60%;
			border-radius: 20px;
		}
		.h1
{
	text-align: center;
	color:indigo
}
		img {
			border-style: groove;
			border-radius: 25px;
		}
.footer hr
{
	background: black;
	height: 1px;
	margin: 20px;
	display: bottom;
}
p
{
	color: black;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	font-size: 18px;
	text-align: justify
}
	body,td,th {
    font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
    font-size: x-large;
}
body {
    background-image: url("images/th (20).jpg");
	background-size: cover;
}
		img {
			border-style: groove;
			border-radius: 25px;
			
		}
    background-repeat: no-repeat;
    font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
}
    </style>
	
</head>

<body>
	 <div class="header">
	  <div class="Container">
		<div class="navbar">
			<nav>
	        <div class="row">
	   
				<a href="Home.html"><img src="images/worms.jpg" alt="" width="150" height="150"></a>
		  
			<ul id="menuList"> 
				   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		        <li><a href="mycart.php"><img src="images/th (4).jpg" width="50" height="50" alt=""></a></li>  
                <li><a href="login.php"><img src="images/profile.jpg" width="50" height="50" alt=""></a></li>
				<li><a href="Contact us page.html"><img src="images/th (6).jpg" width="50" height="50" alt=""></a></li>
			  
			  </ul>
				<img src="images/18da2e9e-431e-45e9-93be-6482bb7f7121_1.f04f93c5a256e9be6d3fb4403eba4d1d.jpeg" class="menu-icon" onClick="togglemenu()" width="30" height="32" alt="">
			</div></nav>
			</div>
		 </div>
    <center><h1>
<strong>~ Confirm your payment ~</strong> </h1>
	<br><br>
	<form action="confirm.php" method="POST" enctype="multipart/form-data">
	<table width="217" border="0">
	  <tbody>
		  
		 <tr>
	      <td width="211"><div class="text-center">
			  <label><strong>First Name</strong></label> 
            <label for="textFirstName">:</label>
              <input name="textFirstName" type="text" autofocus="autofocus" required="required" id="textFirstName" placeholder="Enter your first name">
	      </div><br></td>
        </tr>
		  
		  <tr>
	      <td><div class="text-center">
			  <label><strong>Enter Email</strong></label> 
			  <label for="textEmail">:</label>
              <input name="textEmail" type="text" required="required" id="textEmail" placeholder="Enter your email">
	      </div><br></td>
        </tr>
		  
	    <tr><div class="text-center">
	      <td><label><strong>Select Payment Mode: </strong></label>
	        <select name="payment_mode" required="required">
			  <option>MasterCard/Visa</option>
					<option>Cash-on-delivery [COD]</option>
				  
		  </select><br></td>
			</div>
        </tr>
	    <tr>
	      <td><br>
			<div class="text-center">
				<label><strong>Payment Date: </strong></label>
			  <input type="date" name="date" required />
			</div><br></td>
        </tr>
		  
		  <tr>
	      <td>&nbsp;</td>
        </tr>
		  
	    <tr>
	      <td><div class="text-center">
				<input type="reset" name="reset" id="reset" value="Reset">
				<input name="btnSubmit" type="submit" id="btnSubmit" value="Confirm Payment" />
		  </div></td>
        </tr>
	    
      </tbody>
</table>
</center>
	<br>

	<br><br><br><br><br><br><br><br>
	
<section class="footer">
	<div class="Container">
		<div class="box">
			<h3>Quick Links</h3>
			<ul>
			<a href="home.html">Home</a><br>
			<a href="login.php">Sign up</a><br>
			<a href="Contact us page.html">Contact Us</a>
			</ul>
		</div>
		
		<div class="box">
			<h3>Follow us</h3>
			    <a href="https://www.facebook.com/">Facebook</a> <br>
				<a href="https://www.google.com/">Google</a> 
		</div>
			
		
			<div class="box">
	            <img src="images/worms.jpg" alt="" width="110" height="110"><br><p1><b>bookworms</b><br> @2022 Allrights reserved.</p1>
				
            </div>
		
	<div class="footer-bottom">
			<hr>
			&copy; Copyright 2022 
		</div>
	</div>
	
</section>
	
</body>
</html>


