<?php
include './shared/headindex.php';
include './shared/navindex.php';
include './general/configdb.php';
include './general/function.php';



if(isset($_GET['login'])){

$phone=$_GET['phone'];
$password=$_GET['password'];

$selectAdmin="SELECT * FROM `users` where phone='$phone' and password='$password'  ";
$select= mysqli_query($conn , $selectAdmin);
$row=mysqli_fetch_assoc($select);
 
$check=mysqli_num_rows($select);
   

if($check==1){
     
        $_SESSION['Client'] = $row['phone'];


        header("location:general/function.php?login=$row[phone]");
        header("location:Scheduels.php?number=$row[phone]");

}
else if($check==0 || $check==NULL){
        echo "try again u have an error";
    header("location:../AASTPROJECT/Login.php");
        echo "tryagain";
}
}    
?>

<div class="ss" style=" width: 1907px !important; background-image: url(./Imgs/loginpage.jpg); background-size: 100% 100%; background-repeat: no-repeat; ";>
<br><br> <br> 
    <h1 class=" zz text-info text-center b " style="font-weight: 700; color: #1A5199;">Welcome To Login page</h1>
  




    <div class="container col-6 mt-5  height-auto   ">
        <div class="card" style="background-color: #1A5079 !important; color: white !important;">
            <div class="card-body">
                <form method="GET"  >
                    <div class="form-group">
                        <br>
                        <label class="" for="">  Phone Number</label>
                        <input id="input" type="text" name="phone" class="form-control" name="" id="" placeholder="enter urphone">

                            
                    </div>
                    <div class="form-group">
                        <label class="" for=""> Password</label>
                        <input id="input2" type="password" name="password" class="form-control" name="" id="" placeholder="enter passowrd">
                        
                            
                    </div>
                  <br>
                <button  class="btn btn-block btn-success w-50 mx-auto" name="login">Login</button>
               <br>

                <script src="./javascript/java.js"></script>

                    <?php
                    
include './shared/scriptindex.php';
?>