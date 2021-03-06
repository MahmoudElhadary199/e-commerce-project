<?php
 include 'init.php';
function getTitle(){
    global $pageTitle;
    if (isset($pageTitle)){
        echo $pageTitle;
    }else{
      //  echo 'Default';
    }
}
function CleanInputs($input){

    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);

    return $input;
  }
  function Validator($input,$flag,$length=3){

    $status = true;
    switch ($flag) {
        case 1:
            if(empty($input)){
                $status = false;
            }
            break;
        
        case 2: 
            if(strlen($input) < $length){
                $status = false;
            }
            break;  
            
        case 3: 
            if(!filter_var($input,FILTER_VALIDATE_INT)){
                $status = false;
            }    
            break;

        case 4:
            if(!filter_var($input,FILTER_VALIDATE_EMAIL)){
                $status = false;
            }    
            break;

    }

    return $status;
}

# SANITIZE INPUTS ... 
function Sanitize($input,$flag){

    $sanitize_var = $input;

    switch ($flag) {
        case 1:
              
         $sanitize_var = filter_var($sanitize_var,FILTER_SANITIZE_NUMBER_INT);
            break;
        
    }

    return $sanitize_var;
}

?>