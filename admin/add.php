<?php 
    
   include 'init.php';
  $sql = "select * from users";
  $op  = mysqli_query($connect,$sql);

   if($_SERVER['REQUEST_METHOD'] == "POST"){
       
      $name  = CleanInputs($_POST['Username']);
      $email = CleanInputs($_POST['Email']);
      $password = $_POST['Password'];
     

      $Message = [];
      # Check Validation ... 
      if(!Validator($name,1)){
      
        $Message['Username'] = "Name Field Required";

      }
      
      if(!Validator($name,2)){
      
        $Message['NameLength'] = "Title length must be > 3";

      }

     if(!Validator($password,2,6)){
      
        $Message['Password'] = "Password length must be >= 6";

      }

     if(!Validator($email,1)){
      
      $Message['emailRequird'] = "Email Field Required";

    }

    if(!Validator($email,4)){
      
      $Message['email'] = "Invalid Email";

    }



     if(count($Message) > 0){
       $_SESSION['messages'] = $Message;
             
    } 
   }
   ?>
   
    <div id="layoutSidenav_content">
   <main>
       <div class="container-fluid">
           <h1 class="mt-4">Dashboard</h1>
           <ol class="breadcrumb mb-4">

           <?php 
           
               if(isset($_SESSION['messages'])){

                  foreach($_SESSION['messages'] as $key =>  $data){

                   echo '* '.$key.' : '.$data.'<br>';
                  }

                    unset($_SESSION['messages']);
                }else{
                }
           ?>
           
           <li class="breadcrumb-item active">Add Admin</li>
         </ol>

        
<div class="container">

<form  method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  enctype ="multipart/form-data">

<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text"  name="Username" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
</div>

<div class="form-group">
<label for="exampleInputPassword1"> Password</label>
<input type="password"  name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
 <div class="form-group">
 <label for="exampleInput"> description </label>
 <select name="Cat_ID" class="form-control"> 
<?php 
while($data = mysqli_fetch_assoc($op)){
?>
<option value="<?php echo $data['UserID'];?>"><?php echo $data['Username'];?></option>
<?php } ?>
</select>  
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
      
   </div>
   </main>
  

   
 