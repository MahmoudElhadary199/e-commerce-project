<?php
session_start();
include 'init.php';
if (isset($_SESSION['Username'])){
 
 $id = '';
 if($_SERVER['REQUEST_METHOD'] == "POST"){
  $username=$_POST['Username'];
  $id  = strip_tags($_POST['UserID']);
  $email=$_POST['email'];

  $password=$_POST['password'];

  $FullName=$_POST['FullName']; 
  $password=sha1($password);

  $sql = "update users set UserID='$id', Username='$username',email='$email',password='$password',FullName='$FullName' where UserID = ".$id;

  $op  = mysqli_query($connect,$sql);
  
  if($op){
  
       $Message['Result'] = "Data updated.";
     
  }else{
       $Message['Result']  = "Error Try Again.";
      
   }
  }
}
  
 // header('location:dashboard.php');

 include $tpl . 'footer.php';
?>
 
<div class="container mt-5">
<form method="post"  action="edit.php?id=<?php echo $FetchedData['id'];?>"  enctype ="multipart/form-data">
    <h2 class="text-muted text-center font-weight-bold">Edit Members</h2>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text"  name="Username"   class="form-control" id="inputEmail3">
    </div>
  </div>
  <input type="hidden" name="UserID" value="<?php echo $FetchedData['UserID'];?>">
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name ="email" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password"  name ="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text"  name="FullName" class="form-control" id="inputPassword3">
    </div>
  </div>
       
      
   
  <div class="form-group row m-auto text-center pl-5 pr-5">
    <div class="w-75">
      <button type="submit" class="btn btn-primary">update</button>
    </div>
  </div>
</form>
</div>



