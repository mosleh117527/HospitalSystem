<?php
include '../shared/head.php';
include '../shared/nav.php';
include '../general/configdb.php';
include '../general/function.php';

//insert docotr
if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];

    

    $insert = "INSERT INTO users VALUES(   '$name' , '$phone' , '$pass', '$email' )";
    $in = mysqli_query($conn, $insert);
    TestMesssage($in, "Insert patient");

}
//select fields
$select = "SELECT * FROM doctors";
$users_select = "SELECT * From users";
$usr = mysqli_query($conn, $users_select);
$ss = mysqli_query($conn, $select);

//taking id to  update
$pname = '';
$flag = FALSE;
$usr_name = '';
$usr_phone = '';
$usr_pass = '';
$usr_email = '';
if (isset($_GET['edit'])) {
    $flag = TRUE;
    $id = $_GET['edit'];
    //select doctor

    $selectDo = "SELECT * FROM users where phone=$id ";
    $sd = mysqli_query($conn, $selectDo);
    $row = mysqli_fetch_assoc($sd); #3shan ageb el sha5s bta3t data wa7da
    $usr_name = $row['name'];
    $usr_phone = $row['phone'];
    $usr_pass = $row['password'];
    $usr_email = $row['email'];
    // $dfieldid=$row['fieldid'];


    if (isset($_POST['updatedoctor'])) {
        $name = $_POST['name'];
     
    $usr_phon = $_POST['phone'];
    $usr_pas = $_POST['pass'];
    $usr_emai = $_POST['email'];
     
        $updatedo = "UPDATE users SET name='$name'  , password='$usr_pas' , email='$usr_emai'  where phone=$id";
        $up = mysqli_query($conn, $updatedo);
        TestMesssage($up, "updated");

    }

}
Auth();

?>

<div style="background-color: black;height:95vh;background-image:url(../Imgs/doctor-examining-patient-clinic-illustrated_23-2148856559.jpg); background-repeat: no-repeat; background-size:cover;" class="home">
    <h1 class=" head text-info text-center b">Welcome To Add patient</h1>



    <div class="container col-6 mt-5  height-auto  ">
        <div class="card" style="background-color: #333 !important; color: white !important;">
            <div class="card-body">
                <form method="post">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input required type="text" name="name" class="form-control" placeholder="Enter Your Name"
                            value="<?php echo $usr_name ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Phone</label>
                        <input required type="number" name="phone" class="form-control" placeholder="Enter Your Phone"
                            value="<?php echo $usr_phone ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input required type="password" name="pass" class="form-control" placeholder="Enter Your Password"
                            value="<?php echo $usr_pass ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input  required type="email" name="email" class="form-control" placeholder="Enter Your Mail"
                            value="<?php echo $usr_email ?>">
                    </div>


                   

                    <?php if ($flag): ?>
                    <button class="btn-success btn-block w-50 mx-auto mt-auto mb-auto " name="updatedoctor"
                        style="padding: 10px ;">Update</button>
                    <?php else: ?>
                    <button class="btn-success btn-block w-50 mx-auto mt-auto mb-auto " name="btn"
                        style="padding: 10px ;">Submit</button>

                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include '../shared/script.php';
?>