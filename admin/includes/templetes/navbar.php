<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand font-weight-bold text-white" href="#">LOG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"> </a>
      </li>
      <li class="nav-item dropdown text-white text-muted">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         
        </a>
        <div class="dropdown-menu bg-primary " aria-labelledby="navbarDropdown">
        <a class="dropdown-item bg-success" href="members.php?do=Edit&userid= "> Edit Profiles</a>

          <a class="dropdown-item bg-success" href="logout.php"> </a>
          <a class="dropdown-item bg-info" href="#"> </a>
           
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

 
<?php  
 // session_start();
 // include 'init.php';
  

?>
<nav> 
   
   <!--social-links-and-phone-number----------------->
<div class="social-call">
<!--social-links--->
<div class="social">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
</div>
<!--phone-number------>
<div class="phone">
    <span>Call: +123456789</span>
</div>
</div>
<!--menu-bar----------------------------------------->
<div class="navigation">
<!--logo------------>
<a href="#" class="logo"><img src="images/logo.png"></a>
<!--menu-icon------------->
<div class="toggle"></div>
<!--menu----------------->
<ul class="menu">
    <li><a href="#">Home</a></li>
    <li  class="shop"><a href="#" >Shop</a></li>
    <li><a href="#">Men</a>
        <!--lable---->
        <span class="sale-lable">Sale</span>
    </li>
    <li><a href="#">Women</a></li>
    <li><a href="#">Kids</a></li>
</ul>
<!--right-menu----------->
<div class="right-menu">
    <a href="javascript:void(0);" class="search">
        <i class="fas fa-search"></i>
    </a>
    <a href="javascript:void(0);" class="user">
        <i class="far fa-user"></i>
    </a>
    <a href="#">
        <i class="fas fa-shopping-cart">
            <span class="num-cart-product">0</span>
        </i>
    </a>
</div>
</div>
</nav>
