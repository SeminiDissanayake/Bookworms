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
	<link rel="stylesheet" type="text/css" href="css/dashBoardStyle.css"/>
    <style>
  body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
} 
  .sections
         {
             float:left;
             width: 50%;  
             background-color: #F9F6EE; 
             justify-content:space-around;
         }
 h2
         {
             color: #097969;
              font-family: sans-serif;
         }
 h3{
            color:#228B22;
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
.sections p {
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
* {box-sizing: border-box;}

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
     <a href="books.php">Books</a> 

  </ul>
  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</nav>
<table width="908" height="225" align="center">
  <tbody>
    <tr>
      <td width="900"><div class="main-section">
      <div class="dashbord">
        <div class="icon-section"> <br />
          <img src="images/profile.jpg" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="#">My Profile    <br> </a> </div>
      </div>
      <div class="dashbord dashbord-green">
        <div class="icon-section"> <br />
          <img src="images/add.png"="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="AddAdvertisement.php">Add Books </a> </div>
      </div>
      <div class="dashbord dashbord-blue">
        <div class="icon-section"> <br />
          <img src="images/view.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="ViewMyAdvertisements.php">View My Books</a> </div>
      </div>
      <div class="dashbord dashbord-skyblue">
        <div class="icon-section"> <br />
          <img src="images/publish.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"><a href="EditAdvertisements.php">Publish Books</a> </div>
      </div>
      <div class="dashbord dashbord-red">
        <div class="icon-section"> <br />
          <img src="images/edit.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="ViewMyAdvertisements.php">Edit Advertisements </a> </div>
      </div>
      <div class="dashbord dashbord-orange">
        <div class="icon-section"> <br />
          <img src="images/viewAll.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="ViewAdvertisements.php">View All Books</a> </div>
      </div>
    </div></td>
    </tr>
  </tbody>
</table>
</body>
</html>
