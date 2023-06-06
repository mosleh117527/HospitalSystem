<?php
include '../shared/head.php';
include '../shared/nav.php';
include '../general/configdb.php';
include '../general/function.php';

//select 
$select = "SELECT * FROM users;";
$ss = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($ss); #3shan ageb el sha5s bta3t data wa7da
$phone22 = $row['phone'];
$select2 = "SELECT patient_number from appointements";
$ss2 = mysqli_query($conn, $select2);
$row = mysqli_fetch_assoc($ss2); #3shan ageb el sha5s bta3t data wa7da
$patient_number = $row['patient_number'];


//delete doctor
if(isset( $_GET['delete']) && $phone22!=$patient_number){
    $id=$_GET['delete'];
    $delete="DELETE FROM users where phone=$id";
    $dd=mysqli_query($conn , $delete);
}
 else if( $phone22==$patient_number){

 
    echo "sorry u cant delete";

 }
#TestMesssage( $dd , "delete" );
//header("location :/HospitalSystem/doctor/list.php");







Auth();
?>

<div style="background-color: black;height:170vh;background-image:url(../Imgs/flat-hand-drawn-patient-taking-medical-examination-illustration_23-2148859982.jpg); background-repeat: no-repeat; background-size:cover;" class="home">
    <h1 class=" head text-info text-center b">Welcome To List Patient</h1>



    <div class="container mt-5  height-auto  ">
        <div class="card" style="background-color: #333 !important; color: white !important;">
            <div style="width: 100%;" class="card-body">
                <table class="table table-dark">
                    <tr>
                   
                        <td>Name</td>
                        <td>Phone</td>
                        <td>Password</td>
                        <td>Email</td>
                        <td colspan="3">Action</td>
                    </tr>
                    <tr>
                        <?php foreach($ss as $data) { ?>

                        

                        <td>
                            <?php echo $data['name'] ?>
                        </td>

                        <td>
                            <?php echo $data['phone'] ?>
                        </td>

                        <td>
                            <?php echo $data['password'] ?>
                        </td>

                        <td>
                            <?php echo $data['email'] ?>
                        </td>

                        <?php if($_SESSION['Admin']=='mosleh'): ?>
                        <td>
             
                                <a name="delete" href="list.php?delete=<?php echo $data['phone'] ?>" class="btn btn-danger"> Delete</a>

                              
                           
                          
                            
                            <a name="edit" href="add.php?edit=<?php echo $data['phone'] ?>" class="btn btn-primary"> Edit</a>

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