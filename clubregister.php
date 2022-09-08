<?php

include 'config.php';

if(isset($_POST['submit'])){
	 

   $club_name = mysqli_real_escape_string($conn, $_POST['club_name']);
   $admin_mail = mysqli_real_escape_string($conn, $_POST['admin_email']); 
   $totall_members = $_POST['totall_members'];
   $club_description= mysqli_real_escape_string($conn, $_POST['club_description']);
   $club_type = $_POST['club_type'];
   $club_image="dhrupod.jpg";
   $member_type="admin";

   if (!preg_match("/^[a-zA-Z0-9+_.-]+@*[a-zA-Z.]+.nstu.edu.bd+$/i",$admin_mail )) {

	$message[]= "Must enter Education mail of the university";
  } 
	else{
	$admin = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$admin_mail'") or die('query failed');

           if(!mysqli_num_rows($admin) > 0){
	
	echo '<script>alert("Admin must have an account")</script>'; 
	$message[]= "Admin must have an account";
	 
   }else{
	$select_club = mysqli_query($conn, "SELECT * FROM `clubs` WHERE  club_name = '$club_name'") or die('query failed');
	
	if(!mysqli_num_rows($select_club) > 0){
		mysqli_query($conn, "INSERT INTO `clubs`(club_name,totall_members,club_type,club_description,club_image) VALUES('$club_name', '$totall_members', '$club_type','$club_description','$club_image')") or die('query failed');
		$user = mysqli_query($conn, "SELECT user_id FROM `users` WHERE email = '$admin_mail'") or die('query failed'); 
	       
			while($row = mysqli_fetch_assoc($user)){
				$user_id=$row["user_id"]; 
			}
		
		$club = mysqli_query($conn, "SELECT club_id FROM `clubs` WHERE  club_name = '$club_name'") or die('query failed'); 
		     
		    while($row = mysqli_fetch_assoc($club)){
			     $club_id=$row["club_id"]; 
		    }
	      
		
     

		
		 mysqli_query($conn, "INSERT INTO `club_members`(user_id,club_id,member_type) VALUES('$user_id','$club_id','$member_type')") or die('query failed');
		  

		$message[] = 'registered successfully!'; 
		header('location:login.php');
	   }else{
		 
		$message[]= "This club name already exits!";
	   }
         
      
   } 
}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>NSTU Club Collab</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/register.css">
	<style>
      .batch{
		display: none;
	  }
	</style>
</head>

<body>
<!-- ------------------------------------------error or successfull messege---------------------- -->
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i  class="fa fa-bell " style="font-size:20px" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-7 col-sm-9">
					<div class="text-center my-5">
					<img src="images/club.png" alt="logo" width="100">
						<h1 class="fs-4 card-title fw-bold mb-4">NSTU Club Collab</h1>
					</div>
					<div class="card shadow-lg mb-1">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
							<form action="" method="post" class="form" name="form" autocomplete="on" >
								<div class="mb-3">
									<label class="mb-2 text-muted" for="club_name">Club name</label>
									<input id="club_name" type="text" class="form-control" name="club_name" value="" required autofocus>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="admin_email">Admin Email</label> 
									<input id="admin_email" type="email" class="form-control" name="admin_email" value="" required>
								</div>  
								<div class="mb-3">
									<label class="mb-2 text-muted" for="totall_members">Totall Mmbers</label>
									<input type="number" min="0" name="totall_members" class="box" placeholder="Totall members of the club" required>
								</div>
								<div class="dept mb-3">
	                  				<label class="mb-2 text-muted" for="club_type">Club type</label> 
									<select name="club_type" class="mb-3">
                                         <option value="cultural">Cultural</option>
                                         <option value="educational">Etucational</option>
										 <option value="adventure">Adventure</option>
                                         <option value="sports">Sports</option>
										 <option value="social">Social</option> 
                                     </select> 
								</div>
								<label class="mb-2 text-muted" for="club_description">Club Description</label>  
								<div class="form-outline">
								<label class="form-label" for="textAreaExample">Write about the club</label>
                                   <textarea class="form-control" id="club_description" name="club_description" rows="4"></textarea>
                                    
                                </div>
								 

								<p class="form-text text-muted mb-3">
									By registering you agree with our terms and condition.
								</p>

								<div class="align-items-center d-flex">
									<button type="submit" name="submit" class="btn btn-primary ms-auto">
										Register	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Already have an account? <a href="./login.php" class="text-dark">Login</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
					Copyright &copy; 2022-2023 &mdash; Team Triangle 
					</div>
				</div>
			</div>
		</div>
	</section>
 
</body>
</html>