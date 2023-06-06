<?php
include './shared/headindex.php';
include './shared/navindex.php';
include './general/configdb.php';
include './general/function.php';



?>


<?php

// $selectformfields = "SELECT  name FROM fields";
// $selectformfields2 = mysqli_query($conn, $selectformfields);
// $selectformdoctorfieldsid = "SELECT  fieldid FROM doctors";
// $selectformdoctorfieldsid2 = mysqli_query($conn, $selectformdoctorfieldsid );
// $selectdoctorid= "SELECT id FROM doctors  ";
// $selectdoctorid2 = mysqli_query($conn, $selectdoctorid);
// $selectdayfromdoctors = " SELECT  day FROM doctors  ";
// $selectdayfromdoctors2 = mysqli_query($conn, $selectdayfromdoctors);




#join from field into doctor
#$select = "SELECT doctors.name as 'Doctor name',fields.name as 'Departement name '  ,doctors.price as 'Price'  ,doctors.time as 'Time' FROM doctors INNER JOIN fields on doctors.fieldid= fields.id";
#$firstjoin = mysqli_query($conn, $select);
#$select2 = "SELECT * FROM doctors  INNER JOIN fields on doctors.fieldid=fields.id INNER JOIN patient on doctors.id=patient.doctorid;"
#TestMesssage($firstjoin, "done");

$dname = '';
$field2 = '';
$dname = '';
$time = '';
$day = '';
$price = '';
if (isset($_GET['edit']) && isset($_GET['edite'])) {
  $flag = TRUE;
  $id = $_GET['edit'];
  $id2 = $_GET['edite'];



  $selectuser = "SELECT * FROM users where phone=$id2 ";
  $su = mysqli_query($conn, $selectuser);
  $row = mysqli_fetch_assoc($su); #3shan ageb el sha5s bta3t data wa7da
  $phone22 = $row['phone'];


  //select doctor

  $selectDo = "SELECT * FROM doctors where id=$id ";
  $sd = mysqli_query($conn, $selectDo);
  $row = mysqli_fetch_assoc($sd); #3shan ageb el sha5s bta3t data wa7da
  $dname = $row['name'];
  $field = $row['fieldid'];
  $day = $row['Day'];
  $time = $row['time'];
  $price = $row['price'];
  $room2 = $row['room_id'];


  $selectformfields = "SELECT  name FROM fields where id=$field";
  $selectformfields2 = mysqli_query($conn, $selectformfields);
  $sdfirfields = mysqli_query($conn, $selectformfields);
  $row2 = mysqli_fetch_assoc($sdfirfields);
  $field2 = $row2['name'];
  $phone = "";

  $selectformrooms = "SELECT  * FROM room where id= $room2";
  $selectformrooms2 = mysqli_query($conn, $selectformrooms);
  $sdfirrooms = mysqli_query($conn, $selectformrooms);
   $row3 = mysqli_fetch_assoc($sdfirrooms);
  $room3 = $row3['room_number'];






  if (isset($_POST['btn'])) {


    $xname = $_POST['xname'];
    $phone = $_SESSION['Client'];

    // $field = $_POST['field'];
    // $day = $_POST['day'];
    // $time = $_POST['time'];
    // $docname = $_POST['docname'];
    $select = "SELECT phone FROM users ";
    $ss = mysqli_query($conn, $select);
    #TestMesssage($ss, "test");
    #echo "$phone ,$name ,$docname";
    $firstjoin = mysqli_query($conn, $select);


    $insertion = "INSERT INTO appointements VALUES( null,'$xname',' $phone' ,'$dname','$field2' , ' $day','$time' , $id , $phone22 , default ,default , $room3 )";
    $test = mysqli_query($conn, $insertion);
    //TestMesssage($test, "elhumdellalh");
?>
    <div class="alert alert-success text-justify text-center" role="alert">
      <br><br><br>

      <h1>Inserted TRUE</h1>
    </div>


    <!-- <div class="alert alert-danger text-justify text-center" role="alert">
     Please go to register page <a href="/AASTPROJECT/Register.php" class="alert-link">Register</a>. Give it a click if you like to make an appointement.
    <br>
    OR -->
    <!-- <br class="b">
    <h2 style="font-weight: 900;">
    CHECK YOUR PHONE NUMBER
    </h2>
    </div> -->
<?php

    #$insert = "INSERT INTO patient    $phone,$depname,$depname";
  }
}


// $dfieldid=$row['fieldid'];



// if (isset($_POST['updatedoctor'])) {
//     $name = $_POST['name'];
//     $fieldid = $_POST['fieldid'];
//     $updatedo = "UPDATE doctors SET name='$name' , fieldid=$fieldid where id=$id";
//     $up = mysqli_query($conn, $updatedo);
//    // TestMesssage($up, "updated");

// }


?>




<div style="width: 1907px !important;" class="ss  bg-light">
  <br><br>
  <h1 class="zz d-flex justify-content-center"> Welcome To Appointment</h1>
  <form class="container mt-5 bg-light" method="POST">
    <div class="form-group  ">
      <label for="exampleFormControlInput1"> Enter Your Name</label>
      <input type="text" required name="xname" class="form-control" id="exampleFormControlInput1" placeholder="please enter your name">
    </div>
    <div class="form-group  ">



      <label for="exampleFormControlInput1"> Enter Your Phone Number</label>

      <input type="numbers" name="phone" disabled value="<?php echo $_SESSION['Client'] ?>" class="form-control" id="exampleFormControlInput1" placeholder="please enter your phone number">




    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Departement </label>
      <br>
      <input style="text-align: center;" class="" type="text" id="lname" name="field" value="<?php echo $field2 ?>" disabled>


    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Room </label>
      <br>
      <input style="text-align: center;" class="" type="text" id="lname" name="room" value="<?php echo $room3?>" disabled>


    </div>


    <div class="form-group">
      <label for="exampleFormControlSelect1">Day</label>
      <br>
      <input style="text-align: center;" class="" type="text" id="lname" name="day" value="<?php echo $day ?>" disabled>

    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Time</label>
      <br>
      <input style="text-align: center;" class="" type="text" id="lname" name="time" value="<?php echo $time ?>" disabled>

      <div class="form-group">

        <label for="exampleFormControlSelect1">Selected Doctor</label>
        <br>
        <input style="text-align: center;" class="" type="text" id="lname" name="docname" value="<?php echo $dname ?>" disabled>

      </div>
      <div class="form-group">

        <label for="exampleFormControlSelect1">Doctor Price</label>
        <br>
        <input style="text-align: center;" class="" type="text" id="lname" name="price" value="<?php echo $price ?>" disabled>

      </div>
      <button onclick="APPFUNC()" class="btn btn-block btn-success " name="btn"> Submit</button>

  </form>

</div>

<?php
include './shared/scriptindex.php';
?>