<?php
include '../shared/head.php';
include '../shared/nav.php';
include '../general/configdb.php';
include '../general/function.php';

//select 
$select = "SELECT doctors.id ,doctors.name , fields.name as dname from doctors JOIN `fields` on doctors.fieldid=fields.id";
$ss = mysqli_query($conn, $select);
$select2 = "SELECT room.room_number  as rname from room JOIN `doctors` on doctors.room_id=room.id";
$ss2 = mysqli_query($conn, $select2);

//delete doctor
if(isset( $_GET['delete'])){
    $id=$_GET['delete'];
$delete="DELETE FROM doctors where id=$id";
$dd=mysqli_query($conn , $delete);
#TestMesssage( $dd , "delete" );
//header("location :/HospitalSystem/doctor/list.php");
}
Auth();

?>
<div style=" background-color: black;height:110vh; background-image: url(../Imgs/doctor-patient-desk-hospital-office-clinic-visit-exam-meeting-with-physician-conversation-with-medic-about-diagnosis-results_284092-936.webp);" class="homeadmin">
<br><br> 
<h1 class=" head text-info text-center b" style="color: #343A40 !important; font-weight: 700;">Welcome To List Doctor</h1>


<br>
    <div class="container col-6 mt-5  height-auto  ">
        <div class="card" style="background-color: #333 !important; color: white !important;">
            <div class="card-body">
                <table class="table table-dark">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Field ID</td>
                        <td>Room number</td>
                        <td colspan="2">Action</td>
                    </tr>
                    <tr>
                        <?php foreach ($ss as $data) { ?>

                        <td>
                            <?php echo $data['id'] ?>
                        </td>
                        <td>
                            <?php echo $data['name'] ?>
                        </td>
                        <td>
                            <?php echo $data['dname'] ?>
                        </td>
                        <td>
                        <?php foreach ($ss2 as $data2) { ?>

                            <?php echo $data2['rname'] ?>
                        </td>
                        
                        <?php } ?>
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