
<?php
 
 session_start();
 $user_id=$_SESSION['user_id']; 
 $club_id =$_SESSION['club_id'];
 $club_name = $_SESSION['club_name']; 
 $_SESSION['in_club']=1;
  
 ?><!DOCTYPE html>
<html lang="en">
<head>
     <!-- ------------------------------------------all link and css-------------------------------------------- -->
     <?php include '../assets//linkheader.php';?>   
     
<title>user Structure</title>
</head>
<body> 
<div class="container-scroller">
<!-------------------------------- header and sidebar---------------------- -->
<div class="header"> 
<?php include '../assets//nav.php';?> 
</div>
<!---------------------------------------------totall page-------------------------------------------- -->
 
<div class="maindiv">  
<!--------------------------------------- Discover page body---- -->
<div class="mainsection"> 

<?php include 'editclub.php'; ?>

<!-- manage mamber deisgn -->
 



</div> 
</div>  
</body>
</html>