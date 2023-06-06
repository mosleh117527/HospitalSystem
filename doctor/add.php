<?php
include '../shared/head.php';
include '../shared/nav.php';
include '../general/configdb.php';
include '../general/function.php';

$dprice = '';
$dtime = '';
$dday = '';


//insert docotr
if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $fieldid = $_POST['fieldid'];
    $roomid = $_POST['roomid'];
    $price = $_POST['price'];
    $time = $_POST['time'];
    $day = $_POST['day'];



    $insert = "INSERT INTO doctors VALUES( null ,  '$name' , '$fieldid' , '$price' , '$time' , '$day'  ,  ' $roomid ' , default,default)";
    $in = mysqli_query($conn, $insert);
    header("location:../doctor/list.php");
    //TestMesssage($in, "Insert");
}
//select fields
$select = "SELECT * FROM fields";
$ss = mysqli_query($conn, $select);

$roomss = "SELECT * FROM room";
$room2 = mysqli_query($conn, $roomss);

//taking id to  update
$dname = '';
$flag = FALSE;


if (isset($_GET['edit'])) {
    $flag = TRUE;
    $id = $_GET['edit'];
    //select doctor

    $selectDo = "SELECT * FROM doctors where id=$id ";
    $sd = mysqli_query($conn, $selectDo);
    $row = mysqli_fetch_assoc($sd); #3shan ageb el sha5s bta3t data wa7da
    $dname = $row['name'];
    $dprice = $row['price'];
    $dtime = $row['time'];
    $dday = $row['Day'];
  

    // $dfieldid=$row['fieldid'];

    if (isset($_POST['updatedoctor'])) {
        $name = $_POST['name'];
        $fieldid = $_POST['fieldid'];
        $price = $_POST['price'];
        $time = $_POST['time'];
        $day = $_POST['day'];
        $roomid = $_POST['roomid'];
        $updatedo = "UPDATE doctors SET name='$name' , fieldid='$fieldid' ,price = '$price ', time = '$time' , Day = '$day' , room_id='$roomid' where id=$id";
        $up = mysqli_query($conn, $updatedo);
        TestMesssage($up, "updated");
    }
}
Auth();

?>

<div style="background-color: black;height:95vh; background-image: url(../Imgs/1818.jpg); background-repeat: no-repeat; background-size: cover;" class="homeadmin">
    <h1 class=" head text-info text-center b" style="font-weight: 700; color: #1A5199 !important;">Welcome To Add Doctor</h1>

    <div class="container col-6 mt-5  height-auto  ">
        <div class="card" style="background-color: white !important; color: white !important; box-shadow: rgb(0 0 0 / 17%) -73px 282px 347px 0px inset, rgb(0 0 0 / 15%) 0px -36px 30px 0px inset, rgb(0 0 0 / 10%) 0px -79px 40px 0px inset, rgb(0 0 0 / 6%) 0px 2px 1px, rgb(0 0 0 / 9%) 0px 4px 2px, rgb(0 0 0 / 9%) 0px 8px 4px, rgb(0 0 0 / 9%) 0px 16px 8px, rgb(0 0 0 / 9%) 0px 32px 16px;  ">
            <div class="card-body" style=" ">
                <form method="post">

                    <div class="form-group">
                        <label style="color: black;" for="">Name</label>
                        <input required type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $dname ?>">
                    </div>


                    <div class="form-group">
                        <label style="color: black;" for="">Field ID</label>

                        <select name="fieldid" id="" placeholder="Enter" class="form-control">
                            <option required style="color: black;" value="" disabled selected hidden>Enter A Field</option>
                            <?php foreach ($ss as $data) { ?>
                                <option value="<?php echo $data['id'] ?>">
                                    <?php echo $data['name'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label style="color: black;" for="">room number</label>

                        <select name="roomid" id="" placeholder="Enter" class="form-control">
                            <option required style="color: black;" value="" disabled selected hidden>Enter A room number</option>
                            <?php foreach ($room2 as $data2) { ?>
                                <option value="<?php echo $data2['id'] ?>">
                                    <?php echo $data2['room_number'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label style="color: black;" for="">Price</label>
                        <input required type="text" name="price" class="form-control" placeholder="Enter Price" value="<?php echo $dprice ?>">
                    </div>

                    <div class="form-group">
                        <label style="color: black;" for="">Time</label>
                        <input required type="text" name="time" class="form-control" placeholder="Enter Time" value="<?php echo $dtime ?>">
                    </div>

                    <div class="form-group">
                        <label style="color: black;" for="">Day</label>
                        <input required type="text" name="day" class="form-control" placeholder="Enter Day" value="<?php echo $dday ?>">
                    </div>

                    <?php if ($flag) : ?>
                        <button class="btn-success btn-block w-50 mx-auto mt-auto mb-auto " name="updatedoctor" style="padding: 10px ;">Update</button>
                    <?php else : ?>
                        <button class="btn-success btn-block w-50 mx-auto mt-auto mb-auto " name="btn" style="padding: 10px ;">Submit</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include '../shared/script.php';
?>