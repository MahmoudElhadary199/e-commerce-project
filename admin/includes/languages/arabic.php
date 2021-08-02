<?php

function lang($phrase){
     
    static $lang = array(
        'MASSEGE' =>'محمود فوزى' ,
        'ADMIN'   =>'مدير',
 );
 return $lang [$phrase];
}

?>