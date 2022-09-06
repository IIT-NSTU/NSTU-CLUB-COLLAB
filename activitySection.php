<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/side.css"> 
    <link rel="stylesheet" href="css/discover.css">
    <link rel="stylesheet" href="css/discover.css">
    <link rel="stylesheet" href="css/pr.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/activity.css">
    <link rel="stylesheet" href="css/tableCss/table.css">
    <link rel="stylesheet" href="./css/activity.css">





    
    
    <title>user Structure</title>
</head>
<body> 
<div class="container-scroller">
<!-------------------------------- header and sidebar---------------------- -->
<div class="header"> 
<?php include './clubnav.php';?>  
</div>
<!---------------------------------------------totall page-------------------------------------------- -->
 
<div class="maindiv"> 
    
    
<!-- ----------------------------------------sidebar area fix------------> 
<nav class="sidebar col-xl-3 "> 
<?php include './admin_side.php';?>

</nav> 
<!--------------------------------------- Discover page body---- -->
<div class="mainsection"> 
    
<div class="f-card">
            <div class="headers">
                <div class="options"><i class="fa fa-chevron-down"></i></div>
                <img class="co-logo" src="../images/adventureClub.jpg" />
                <div class="co-name"><a href="#">Advanture club</a></div>
                <div class="time"><a href="#">2hrs</a> · <i class="fa fa-globe"></i></div>
            </div>
            <div class="content">
                <p>Height is optional, if no height is specified the image will be a square.Example: <a href="http://placehold.it/300">http://placehold.it/300</a> See More</p>
            </div>

            <div class="reference">
                <img class="reference-thumb" src="https://source.unsplash.com/600x400/?advanture" />
                <div class="reference-content">
                <div class="reference-title">A quick and simple image placeholder service. | PLACEHOLDER.it</div>
                    <div class="reference-subtitle">How does it work? Just put your image size after our URL and you'll get a placeholder.</div>
                <div class="reference-font">placeholder.it</div>
                </div>
            </div>

    </div>

    <div class="f-card">
            <div class="headers">
                <div class="options"><i class="fa fa-chevron-down"></i></div>
                <img class="co-logo" src="../images/adventureClub.jpg" />
                <div class="co-name"><a href="#">Advanture club</a></div>
                <div class="time"><a href="#">2hrs</a> · <i class="fa fa-globe"></i></div>
            </div>
            <div class="content">
                <p>Height is optional, if no height is specified the image will be a square.Example: <a href="http://placehold.it/300">http://placehold.it/300</a> See More</p>
            </div>

            <div class="reference">
                <img class="reference-thumb" src="https://source.unsplash.com/600x400/?advanture" />
                <div class="reference-content">
                <div class="reference-title">A quick and simple image placeholder service. | PLACEHOLDER.it</div>
                    <div class="reference-subtitle">How does it work? Just put your image size after our URL and you'll get a placeholder.</div>
                <div class="reference-font">placeholder.it</div>
                </div>
            </div>

    </div>

</div>


</div>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>