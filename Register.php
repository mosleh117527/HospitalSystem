<?php
include './shared/headindex.php';
include './shared/navindex.php';
include './general/configdb.php';
include './general/function.php';

 
?>



<?php

if (isset($_POST['Register'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $insert = "INSERT INTO users  VALUES(   '$name' ,   '$phone' ,'$password', '$email' ,default,default  ) ";

    $in = mysqli_query($conn, $insert);

    if ($in == TRUE) {
?> <br><br><br>
           <div class="alert alert-success text-justify text-center" role="alert">
           
        
        <h1>Registered Succesfully</h1>
      </div> 
    <?php

    }

}
?>

<div class="ss"  style="  width: 1907px !important; background-image: url(https://img.freepik.com/premium-vector/regitration-front-room-hospital-flat-style-vector-illustration-cartoon-character_36082-679.jpg?w=2000); background-repeat: no-repeat; background-size: cover;">
<br>
<br>   
<br>
<h1 style="font-weight: 700; color: #0066CC !important;" class="  zz text-info text-center b">Welcome To Register page</h1>



    <div class="container col-6 mt-5  height-auto  ">
        <div class="card" style="background-color: #333 !important; color: white !important;">
            <div class="card-body">
                <form method="POST" >
                    <div class="form-group">
                        <label class="" for="">Enter Your Name</label>
                        <input id=" " type="text" name="name" class="form-control" required name="" minlength="3" maxlength="100"   placeholder="enter your name">

                            
                    </div>

                     <div class="form-group">
                        <label class="" for=""> Enter your phone number</label>
                        <input id=" " type="number" name="phone" class="form-control" name="" required minlength="11" maxlength="11"     placeholder="Enter your phone number">

                            
                    </div>
                    <div class="form-group">
                        <label class="" for=""> Enter your Password</label>
                        <input  id=" " type="password" name="password" class="form-control" name="" required minlength="8" maxlength="20"  placeholder="Enter your word">

                            
                    </div>
                    <div class="form-group">
                        <label class="" for=""> Enter your email</label>
                        <input id=" " type="email" name="email" class="form-control  " required minlength="8" maxlength="20" name=""   placeholder="Enter your email">

                            
                    </div>
                    <button id="fottonscence" name="Register" class="btn btn-block btn-success w-50 mx-auto">Register</button>


                    <script src="./javascript/java.js"></script>

                    <?php
include './shared/script.php';
?>