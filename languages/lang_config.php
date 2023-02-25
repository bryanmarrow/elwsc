<?php



// Set Language variable
if(isset($_GET['lang']) && !empty($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
   
    if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
     echo "<script type='text/javascript'> location.reload(); </script>";
    }
}
// Include Language file
if(isset($_SESSION['lang'])){
    $url=$rootPath."languages/lang_".$_SESSION['lang'].".php";
    include $url;
}else{
    $url=$rootPath."languages/lang_es.php";
    include $url;
}