

<?php
session_start();
if (isset($_GET['logout'])) {
  session_unset();
  session_destroy();
  header("location:./index.php");
}
?>

<nav class=" navbar navbar-expand-lg   text-justify text-center " style="width: 1920px !important ;
  top: 0;
  z-index: 600;
  position: fixed;
  
">
         <a class="navbar-brand" href="#"><img width="auto" height="50px" src="./Imgs/wecare100.png" alt=""></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">



             <ul class="navbar-nav mr-auto " >
                
 
                 <li class="nav-item active">
                     <a class="nav-link" href="../AASTPROJECT/index.php">Home <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#s3">About Us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#s2">Our Departement</a>
                 </li>
             
     

                 <li class="nav-item">
                     <a class="nav-link" href="Contact-us.php">Contact Us</a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link" href="../AASTPROJECT/Scheduels.php">Schedules</a>
                 </li>

                 </li>



             </ul>
             <?php if (!isset($_SESSION['Client']) == '$phone') {
                ?>


             <a href="../AASTPROJECT/Login.php " class="btn btn-success my-1 my-sm-2 mr-2 "> Login
             </a>
 
             <a href="../AASTPROJECT/Register.php" class="btn btn-success my-1 my-sm-2 mr-5 "> Register
             </a>
           
             <a href="../AASTPROJECT/admin/loginAdmin.php" class="btn btn-danger my-1 my-sm-2 mr-2 "> Admin
             </a>
             <br>
             </a>
             <?php }  ?>
            
             <?php   
    if( isset($_SESSION['Client'])=='$phone' ):
        
 ?>
    <form action="index.php" method="GET">

      <button name=logout class="btn mr-5 btn-danger my-1 my-sm-2"> Log Out </button>
    </form>
    <?php   
    endif;
        
 ?>
         </div>


         </div>
     </nav>

