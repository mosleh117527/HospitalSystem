<?php
session_start();
if (isset($_GET['logout'])) {
  session_unset();
  session_destroy();
  header("location:../index.php");
}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-info" href="#">WECARE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    <?php   
    if( isset($_SESSION['Admin'])=='mosleh'):
      
        
 ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-info" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Doctor
        </a>

     
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../doctor/add.php">Add doctor</a>
          <a class="dropdown-item" href="../doctor/list.php">List doctor</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-info" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Fields
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../field/add.php">Add Fields</a>
          <a class="dropdown-item" href="../field/list.php">List Fields</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-info" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Patient
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../patient/add.php">Add Patient</a>
          <a class="dropdown-item" href="../patient/list.php">List Patient</a>
        </div>
      </li>
      <?php   
    endif;
        
 ?>


    </ul>
    <a href="/AASTPROJECT/admin/loginAdmin.php" class="btn btn-success my-1 my-sm-2 mr-5 "> Login </a>
    <?php   
    if( isset($_SESSION['Admin'])=='mosleh' ):
        
 ?>
    <form action="" method="GET">
      <button name="logout" class="btn mr-5 btn-danger my-1 my-sm-2">Log Out</button>
    </form>
    <?php   
    endif;    
 ?>

  </div>


  </div>
</nav>