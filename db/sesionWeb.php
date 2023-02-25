<?php

// Offline 0 - Online 1
$statusWeb=$datastatusWeb['option_value']; 


if(isset($_SESSION['log']) && $statusWeb==0){
    //   var_dump('Sesión logeada y sitio Offiline');
    $rollWeb=0;
}if(!isset($_SESSION['log']) && $statusWeb==0){
    //   var_dump('Sin sesión');
    $rollWeb=1;
}if($statusWeb==1){
    //   var_dump('Sitio Online');
    $rollWeb=2;
}

?>