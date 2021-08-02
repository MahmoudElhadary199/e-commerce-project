
<?php
$count=1;
echo $count++;
 
 
?>



<?php 
session_start();
$nonavbar='';
$pageTitle='login';
if (isset($_SESSION['Username'])){
  //header('location:dashboard.php');

}
include 'init.php';
   if($_SERVER['REQUEST_METHOD']=='POST'){
     $username=$_POST['user'];
     $password=$_POST['pass']; 
     $password=sha1($password);
    $sql ="insert into users (Username ,Password) values (' $username','$password')";
    //$sql=("SELECT * FROM users WHERE UserID=? LIMIT 1");
      $op=mysqli_query($connect,$sql);
    
  if($op){
    echo 'welcome' . $username ;
    $_SESSION['Username']=$username;
    $_SESSION['ID']=$row['UserID'];
    header('location:dashboard.php');
    exit();
  }
   }
?>
<div class="container mt-5 pt-5">
   
 <form class="login w-50 m-auto pt-5" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype ="multipart/form-data">
   <h4 class="text-center text-muted m-2 p-3">Admin Login</h4>
   <input  class="form-control input-group-lg m-2" type="text" name="user" placeholder="UserName" autocomplete="off"/>
   <input class="form-control input-group-lg m-2" type="password" name="pass" placeholder="Password" autocomplete="new-password"/>
   <input class="btn btn-primary  input-group-lg m-2 w-100" type="submit" value="login"/>
 </form>
</div>
<?php
include $tpl . 'footer.php';?>

