<?php
include '../shared/head.php';
include '../shared/nav.php';
include '../general/configdb.php';
include '../general/function.php';



if (isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $selectAdmin = "SELECT * FROM `admin` where name='$username' and password='$password'  ";
    $select = mysqli_query($conn, $selectAdmin);
    $row = mysqli_fetch_assoc($select);

    $count = mysqli_num_rows($select);
    if ($count == 1) {
        $_SESSION['Admin'] = $row['name'];

    } else if ($count == 0) {
        header("location:../admin/loginAdmin.php");
    }
}

// if (isset($_POST['logout']))
// {
//     header("location:../AASTPROJECT/index.php");
// }
?>

<div style="background-color: black;height:95vh; background-image: url(../Imgs/businessman-using-tablet-analyzing-sales-data-economic-growth-graph-chart_34200-308.webp); background-size: cover; " class="homeadmin">
<br><br> <br>
<h1 class=" head text-info text-center b" style="color: #32415F !important ; font-size: 45px;">Welcome To Admin Login page</h1>



    <div class="container col-6 mt-5  height-auto  ">
        <div class="card" style="background-color: #343A40 !important; color: white !important;">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label class="" for=""> UserName</label>
                        <input type="text" required name="username" class="form-control" name="" id=""
                            placeholder="enter username">


                    </div>
                    <div class="form-group">
                        <label class="" for=""> password</label>
                        <input type="password" required name="password" class="form-control" name="" id=""
                            placeholder="enter passowrd">


                    </div>
                    <button name="login" class="btn btn-block btn-success w-50 mx-auto">Login</button>
            </div>
        </div>
    </div>
</div>

<?php
    include '../shared/script.php';
    ?>