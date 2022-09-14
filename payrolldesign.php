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
        <h5 class="text-uppercase">Club info</h5>
     
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

 <!-- Club info end -->

<div class="container">
 <div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="table-responsive">
				<table class="table user-list">
                    <h1>Member Payroll</h1>

                    <?php

include './config.php';

$sql = "SELECT generalmember.name,pay.payment_ammount,pay.transiction_number,pay.payment_status,pay.userpayment_no
FROM generalmember
INNER JOIN pay ON pay.user_id=generalmember.id"; 

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0)
  {

?>

					<thead>
						<tr>
							<th><span>Name</span></th>
							<th><span>Gmail</span></th>
							<th><span>Payment Amount</span></th>
              <th><span>Transaction number</span></th>
              <th><span>Payment Status</span></th>
              <th><span>User Payment number</span></th>

							
						</tr>
					</thead>
					<tbody>
          <?php
              while($row = mysqli_fetch_array($result))
              {
              ?>
						<tr>
							<td>
								<!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""> -->
								<!-- <a href="#" class="user-link">Mila Kunis</a> -->
                
                <h4><?php echo $row['name'] ?></h4>  
                <p>Software engineering</p> 
                 

							</td>
							<td>
							     <p>sourav@gmail.com </p>
							</td>
						
							<td class="text-center">
								<p><?php echo $row['payment_ammount'] ?></p>
							</td>
                 <td class="text-center">
								  <p><?php echo $row['transiction_number'] ?></p>
							</td>
							<td class="text-center">
								  <!-- <a href="">Checked</a> -->
                  <button class="btn btn-secondary p-2">
                    <?echo $row['payment_status']?>
                  </button>
						
							</td>
              <td class="text-center">
								<p><?php echo $row['userpayment_no'] ?></p>
							</td>

						</tr>
            <?php } ?>
					</tbody>
          <?php } ?>
  <?php }?>
				</table>
			</div>

		</div>
	</div>
</div>
</div>