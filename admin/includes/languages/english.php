<?php

function lang($phrase){
     
    static $lang = array(
        'HOME'       =>'Home' ,
        'links'      =>'About',
        'More'       =>'More',
        'CATAGORIES' =>'Logout',
        'CALL ME'    =>'Call us'

 );
 return $lang [$phrase];
}

?>