<?php
include './shared/headindex.php';
include './shared/navindex.php';
include './general/configdb.php';
include './general/function.php';

//select 
$select = "SELECT doctors.id ,doctors.name ,doctors.price as price,doctors.time ,doctors.Day , fields.name as dname from doctors JOIN `fields` on doctors.fieldid=fields.id";
$ss = mysqli_query($conn, $select);

if(isset( $_GET['number'])){
    $id=$_GET['number'];
//header("location :/HospitalSystem/doctor/list.php");

$selectuser = "SELECT phone FROM users where phone=$id ";
$sd = mysqli_query($conn, $selectuser);
$row = mysqli_fetch_assoc($sd); #3shan ageb el sha5s bta3t data wa7da
$phone2 = $row['phone'];

 
 
}







?>

<div  style="height: 110vh; background-image: url(https://img.freepik.com/premium-photo/stethoscope-with-calendar-page-date-blue-background-doctor-appointment-medical-concept_293060-179.jpg?w=2000); background-size: cover; background-repeat: no-repeat; width: 1907px !important;" class=" ss home"  >
<h1 id="demo" class="  zz text-info text-center  "></h1>

    <h1 class="zz text-info text-center  " style=" width: 1907px !important; font-weight: 700; color: #0066CC !important; font-weight: 700; ">Welcome To Schedules</h1>
    <?php if (!isset($_SESSION['Client']) == '$phone') {
                            ?>
    <h1 class="  zz text-info text-center  " style="color: red !important; font-weight: 800;; ">U NEED TO REGISTER TO MAKE AN APPOINMENT </h1>
    
    <?php } ?>

    <div class="container col-6 mt-5  height-auto  ">
        <div class="card" style="background-color: #333 !important; color: white !important;">
            <div class="card-body">
                <table class="table table-dark">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Field ID</td>
                        <td>Doctor price</td>
                        <td>Day</td>
                        <td>Time</td>
                        <?php if (isset($_SESSION['Client']) == '$phone'){
                             ?>
                        <td>Action</td>
                        <?php };?>
                        

                        
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
                            <?php echo $data['price'] ?>
                        </td>
                        <td>
                            <?php echo $data['Day'] ?>
                        </td>
                        <td>
                            <?php echo $data['time'] ?>
                        </td>
                        <td>
                            <?php if (isset($_SESSION['Client']) == '$phone') {
                            ?>
                            
                        <a onclick="checkAPP()" id = "checkbtn" name="edit" href="Appointement.php?edit=<?php echo $data['id'] ?>&edite=<?php echo $phone2  ?> " class="btn btn-primary"> Appoint</a>                        </td>
                     
                       <?php
                            };?>
                    </tr>
                    <?php } ?>
                </table>


            </div>
        </div>
    </div>
</div>


<script src="./javascript/java.js"></script>

<?php
include './shared/script.php';
?>