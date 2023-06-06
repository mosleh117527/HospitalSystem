 <?php

 if (isset($_GET['login'])) {
 
    $phone = $_GET['login'];
 }
 ?>
<?php
if (isset($_GET['login'])) {
    $phone = $_GET['login']; 
}
?>
<?php

 function TestMesssage($condition ,$mess){


    if($condition){
        echo "$mess true";
    }
    else
    echo"$mess false";

 }
 function Auth(){
    if( isset($_SESSION['Admin'])=='mosleh'){
 
     }
else  {
header("location:../index.php");
}
}
function AuthForClient(){
  

   if( isset($_SESSION['Client'])=='$phone'){

    }
else  {
header("location:/Login.php");
}
}





