
<?php
//session_start();
   $pageTitle='dashboard';
// if (isset($_SESSION['Username'])){
  include 'init.php';
//} else{
//echo "this page is not found";
//header('location:index.php');
//exit();
//}
 
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





















