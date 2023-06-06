<?php
include '../shared/head.php';
include '../shared/nav.php';
include '../general/configdb.php';
include '../general/function.php';

//select  fields
$select = "SELECT * from fields";
$ss = mysqli_query($conn, $select);

//delete fields
if(isset( $_GET['delete'])){
    $id=$_GET['delete'];
$delete="DELETE FROM fields where id=$id";
$dd=mysqli_query($conn , $delete);
TestMesssage( $dd , "delete" );
//header("location :/HospitalSystem/doctor/list.php");
}
Auth();
?>

<div style="background-color: black;height:170vh;background-image: url(../Imgs/pexels-karolina-grabowska-4386467.jpg); background-repeat: no-repeat; background-size:cover;" class="home">
    <h1 class=" head text-info text-center b">Welcome To List Fields</h1>



    <div class="container col-6 mt-5  height-auto  ">
        <div class="card" style="background-color: #333 !important; color: white !important;">
            <div class="card-body">
                <table class="table table-dark">
                    <tr>
                        <td>ID</td>
                        <td>Field Name</td>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <?php foreach ($ss as $data) { ?>

                        <td>
                            <?php echo $data['id'] ?>
                        </td>
                        <td>
                            <?php echo $data['name'] ?>
                        </td>
                        <?php if($_SESSION['Admin']=='mosleh'): ?>
                        <td>
                            <a name="delete" href="list.php?delete=<?php echo $data['id'] ?>" class="btn btn-danger"> Delete</a>
                            <a name="edit" href="add.php?edit=<?php echo $data['id'] ?>" class="btn btn-primary"> Edit</a>

                        </td>
                        <?php endif; ?>
                    </tr>
                    <?php } ?>
                </table>


            </div>
        </div>
    </div>
</div>



<?php
include '../shared/script.php';
?>