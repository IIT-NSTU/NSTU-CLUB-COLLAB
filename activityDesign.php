
<?php
sleep(1);
$page = $_POST['page']??1; // if page is not set..then it get by default 1 value
$limit = 3;
$row = ($page - 1)*$limit;
$db = mysqli_connect("localhost","root","","clubcollab");
$query = "SELECT * from member limit $row,$limit";
$run = mysqli_query($db,$query);
$data = mysqli_fetch_all($run,MYSQLI_ASSOC);

// echo "<pre>";
// print_r($data);


foreach($data as $sub){
?>

<div class="f-card">
            <div class="headers">
                <div class="options"><i class="fa fa-chevron-down"></i></div>
                <img class="co-logo" src="../images/adventureClub.jpg" />
                
                <div class="co-name"><a href="#"><?=$sub['id']?></a></div>
                <div class="time"><a href="#">2hrs</a> · <i class="fa fa-globe"></i></div>
            </div>
            <div class="content">
                <p>Height is optional, if no height is specified the image will be a square.Example: <a href="http://placehold.it/300">http://placehold.it/300</a> See More</p>
            </div>

            <div class="reference">
                <img class="reference-thumb" src="./clubimages/"<?=$sub['img']?> />
                <div class="reference-content">
                <div class="reference-title"><?=$sub['name']?></div>
                </div>
            </div>

    </div>

<?php
}



?>



