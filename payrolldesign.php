<?php
require './config.php';
$_SESSION["club_id"] = 27; // User's session Dhrupod club
$sessionId = $_SESSION["club_id"];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT totall_members FROM clubs WHERE club_id = $sessionId"));
$total_money = mysqli_fetch_assoc(mysqli_query($conn, "SELECT totall FROM clubmonthypayment WHERE club_id = $sessionId"));


?>
<section>
<div class="row">
      <div class="col-12 mt-3 mb-1">
        <h5 class="text-uppercase">Member Payroll</h5>
     
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <i class="fa fa-users fa-4x" aria-hidden="true"></i>
              </div>
              <div class="text-end">
                <h3><?php echo $user['totall_members'];?></h3>
                <p class="mb-0">Members</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <i class="fa fa-money fa-4x" aria-hidden="true"></i>
              </div>
              <div class="text-end">
                <h3><?php echo $total_money['totall'];?></h3>
                <p class="mb-0">Total Money</p>
              </div>
            </div>
          </div>
        </div>
      </div>

</section>
