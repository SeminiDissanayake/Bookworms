<?php session_start();
if (!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
    <link rel="stylesheet" href="CSS/formStyle.css" type="text/css">
    
      <style>
          html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

  body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;

 
} 
div{
  box-sizing: border-box;
}
nav{
  background: #023020;
  display: flex;
  justify-content:space-around;
  align-items: center;
  color: #fff;
}
.search
          {
              width: 25px;
  height: 3px;
  color: #333;
  margin: 5px;
  float: left;
          }
.nav-links {
    display: flex;
    justify-content:space-around;
    width: 50%;
    text-transform: uppercase;
}
.nav-links a{
  display: block;
   text-transform: uppercase;
   text-decoration: none;
   color: #fff;
  border-bottom:2px solid transparent;
  transition:0.5s ease;
  transform: translateX(0%);
}
.nav-links a:hover{
  color:#7CFC00;
  letter-spacing: 5px;
}
.burger{
  display: none;
}
.burger div{
  width: 25px;
  height: 3px;
  background: #fff;
  margin: 5px;
  transition:all 0.5s ease;
}
@media only screen and (max-width: 760px){
   nav{
    justify-content: space-between;
    padding: 0 5vw;
  }
  .nav-links{
    position: absolute;
    right: 0;
    top:8vh;
    min-height:92vh;
    background: #333;
    display: flex;
    flex-direction: column;
    align-items: center;   
    width: 50%;
    margin: 0;
    padding: 0;
    transform: translateX(100%);
    transition:All 0.5s ease-in;
  }
  .nav-links a{
    opacity: 0;
 
  }
  .burger{
    display: block;
  }
 
}
@media only screen and (max-width: 640px){
  nav{
    justify-content: space-between;
    padding: 0 5vw;
  }
}
.nav-active{
  transform: translateX(0);
}
@media only screen and (max-width: 460px){
  .nav-links{
    width: 100%;
    transition:All 0.5s ease;
  }
}
.nav-active{
  transform: translateX(0);
}
@keyframes navLinkFade{
  from{
    opacity: 0;
    transform: translateX(50px);
  }
  to{
    opacity: 1;
    transform: translateX(0);
  }
}
.toggle .line1{
   transform: rotate(-45deg) translate(-5px,6px );
}
.toggle .line2{
   opacity: 0;
}
.toggle .line3{
   transform: rotate(45deg) translate(-5px,-6px );
}
    </style>
</head>

<body>
     <script>
       const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links a");

  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");

    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.5
        }s `;
      }
    });
    burger.classList.toggle("toggle");
  });
  //
};

navSlide();
          </script>
 <nav>
  <div class="logo">
    <h4>BooKWormS</h4>
  </div>
  <ul class="nav-links"> 
      <a href="home.html">Home</a>
      <a href="login.php">Sign In</a> 
      <a href="myAccount.php">My Account</a>
     <a href="#">Books</a> 

  </ul>
  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</nav>
	<?php
		$con = mysqli_connect("localhost","root","","bookworms");
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
	
		$sql = "SELECT * FROM `tbladvertisement` WHERE `email` = '".$_SESSION["username"]."';";
	
		$result = mysqli_query($con, $sql);
	
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
	?>
  <div class="row">
  <div class="column">
    <div class="card">
	  <p></p>
      <img src="<?php echo $row["imagePath"]?>"  style="width:100%" >
      <div class="container">
        <h2><?php echo $row["bookName"]?></h2>        
        <p><?php echo $row["description"]?></p>  
        <p>Contact number : <?php echo $row["contactNumber"]?> </p> 
		<p>
			<a href="EditAdvertisement.php?id=<?php echo $row["advertisementID"]; ?>">Edit</a>
			&nbsp;|&nbsp;
			<a href="DeleteAdvertisement.php?id=<?php echo $row["advertisementID"]; ?>">Delete</a>
		</p>
      </div>
    </div>
	</div>
	<?php
	  		}
		}
		mysqli_close($con);
	?>
</body>
</html>