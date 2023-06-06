<?php
include '../shared/head.php';
include '../shared/nav.php';
include '../general/configdb.php';
include '../general/function.php';

//insert field
if (isset($_POST['btn'])) {
    $name = $_POST['name'];
 
    $insert = "INSERT INTO fields VALUES( null ,  '$name'  )";
    $in = mysqli_query($conn, $insert);
    TestMesssage($in, "Insert");

}
 
//taking id to  update
$fname = '';
$flag = FALSE;

if (isset($_GET['edit'])) {
    $flag = TRUE;
    $id = $_GET['edit'];
    //select doctor

    $selectDo = "SELECT * FROM fields where id=$id ";
    $sd = mysqli_query($conn, $selectDo);
    $row = mysqli_fetch_assoc($sd); #3shan ageb el sha5s bta3t data wa7da
    $fname = $row['name'];
    // $dfieldid=$row['fieldid'];


    if (isset($_POST['updatedoctor'])) {
        $name = $_POST['name'];
         $updatedo = "UPDATE fields SET name='$name'  where id=$id";
        $up = mysqli_query($conn, $updatedo);
        TestMesssage($up, "updated");

    }

}
Auth();

?>

<div style="background-color:black;height:95vh;background-image: url(../Imgs/healthcare-background-with-medical-symbols-hexagonal-frame_1017-26363.jpg); background-repeat: no-repeat; background-size: cover;" class="home">
    <h1 class=" head text-info text-center b">Welcome To Add fields</h1>



    <div class="container col-6 mt-5  height-auto  ">
        <div class="card" style="background-color: #333 !important; color: white !important;">
            <div class="card-body">
                <form method="post">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input required type="text" name="name" class="form-control" placeholder="Enter Name"
                            value="<?php echo $fname ?>">
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