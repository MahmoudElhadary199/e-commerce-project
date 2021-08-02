<?php 
    
   include 'init.php';

   $id = '';
   if($_SERVER['REQUEST_METHOD'] == "GET"){

    // LOGIC .... 
      $Message = [];
      $id  = Sanitize($_GET['UserID'],1);
     
       if(!Validator($id,3)){
 
        $Message['UserID'] = "Invalid ID";
        
        $_SESSION['messages'] = $Message;
       header("Location: index.php");
       }

    }
   if($_SERVER['REQUEST_METHOD'] == "POST"){
       
    // LOGIC ... 

      $title = CleanInputs($_POST['UserName']);
      $id    = Sanitize($_POST['UserID'],1);


      $Message = [];
      # Check Validation ... 
      if(!Validator($title,1)){
      
        $Message['UserName'] = "Title Field Required";

      }
  
      
      $length = 6;

      if(!Validator($title,2,$length)){
      
        $Message['usernameLength'] = "Title length must be > ".$length;

      }



      if(!Validator($id,3)){
          $Message['id'] = "Invalid id";
      }


     if(count($Message) > 0){
       $_SESSION['messages'] = $Message;
             
    }else{

    # DB OPERATION .... 

    $sql = "update adminroles set title='$title' where id = ".$id;

    $op  = mysqli_query($connect,$sql);

    if($op){

         $Message['Result'] = "Data updated.";
       
    }else{
         $Message['Result']  = "Error Try Again.";
     
     }
        $_SESSION['messages'] = $Message;
       
        header('Location: index.php');

     }

   }





   # Fetch Data to id . 
   $sql  = "select * from users where UserID = ".$id;
   $op   = mysqli_query($connrct,$sql);
   $FetchedData = mysqli_fetch_assoc($op);
      
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
                        ?>
                        
                        <li class="breadcrumb-item active">Add Role</li>
                        <?php } ?>                       
                        </ol>
 <div class="container">

 <form  method="post"  action="edit.php?id=<?php echo $FetchedData['UserID'];?>"  enctype ="multipart/form-data">
 
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text"  name="title" value="<?php echo $FetchedData['UserName'];?>" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter username">
  </div>

   <input type="hidden" name="id" value="<?php echo $FetchedData['UserID'];?>">
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
     
  </div>
</main>
               
    
                
  