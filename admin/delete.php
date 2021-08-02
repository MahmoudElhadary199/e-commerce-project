<?php 
session_start();
  include 'init.php';

 if($_SERVER['REQUEST_METHOD'] == "GET"){

   // LOGIC .... 
     $Message = [];
     $id  =strip_tags($_GET['UserID'],1);
    
      if(!Validator($id,3)){

       $Message['id'] = "Invalid ID";

    
      }else{

        // DB Opretaion ... 
        $sql = "delete from users where UserID =".$id;

        $op = mysqli_query($connect,$sql);

        if($op){
            $Message['Result'] = "deleted done";
        }else{
            
        $Message['Result'] = "error in delete operation";
        }
     
      }

     $_SESSION['messages'] =  $Message;
    //  header('location:dashboard.php');
    // exit();
     header("Location: index.php");

 }



?>
 <form class="login w-50 m-auto pt-5" action="<?php echo $_SERVER['PHP_SELF']?>" method="GET"  >
   <h4 class="text-center text-muted m-2 p-3">Admin Delete</h4>
   <input type="hidden" name="UserID" value="<?php echo $FetchedData['UserID'];?>">
   <input  class="form-control input-group-lg m-2" type="text" name="Username" placeholder="UserName" autocomplete="off"/>
   <input class="btn btn-primary  input-group-lg m-2 w-100" type="submit" value="login"/>
 </form>