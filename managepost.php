 

<?php
include 'config.php';
if(isset($_POST['submit'])){
    $comment_content= mysqli_real_escape_string($conn, $_POST['comment_content']);
    $post_id= $_POST['post_id']; 
    $comment_time = date("m.d.Y");
    $user_id="1";
    mysqli_query($conn, "INSERT INTO `comment`(user_id,post_id,comment_content,comment_time) VALUES('$user_id', '$post_id', '$comment_content','$comment_time')") or die('query failed');
     
    
}
         $post = mysqli_query($conn, "SELECT * FROM `post`ORDER BY post_id DESC ") or die('query failed');
         if(mysqli_num_rows($post) > 0){ 
            while($row = mysqli_fetch_assoc($post)){ 
                $post_id=$row['post_id'];
                $post_caption=$row['post_caption'];
                $post_picture=$row['post_picture'];
                $post_time=$row['post_time']; 
                $club_id=$row['club_id'];
                $club=mysqli_query($conn, "SELECT * FROM `clubs` WHERE club_id='$club_id'") or die('query failed');
                if(mysqli_num_rows($club) > 0){
                    $rowc= mysqli_fetch_assoc($club);
                    $club_name=$rowc['club_name'];
                    $club_image=$rowc['club_image'];
                     
                }
                $comment=mysqli_query($conn, "SELECT * FROM `comment` WHERE post_id='$post_id' ORDER BY comment_id DESC") or die('query failed');
                if(mysqli_num_rows($comment) > 0){
                    $rowco= mysqli_fetch_assoc($comment);
                    $user_id=$rowco['user_id'];
                    $comment_content=$rowco['comment_content'];
                    $comment_time=$rowco['comment_time'];
                     
                }
                $user=mysqli_query($conn, "SELECT name FROM `users` WHERE  user_id=' $user_id'") or die('query failed');
                if(mysqli_num_rows($user) > 0){
                    $rowu= mysqli_fetch_assoc($user);
                    $user_name=$rowu['name']; 
                     
                }

                
      ?>


<section >
    <div class="container my-2 py-1 px-2">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
                <div class="card p-2">

                    <div class="card-body">
                        <div class="d-flex flex-start align-items-center">
                            <img class="rounded-circle shadow-1-strong me-3" src="images/<?php echo $club_image; ?>" alt="avatar" width="60" height="60" />
                            <div>
                                <h6 class="fw-bold text-primary mb-1"><?php echo $club_name; ?></h6>
                                <p class="text-muted small mb-0">
                                <?php echo  $post_time; ?>
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="mt-3 mb-1 pb-2 pe-2" style="text-align:justify;"> 
                            <?php echo  $post_caption; ?>
                            </p>
                        </div>
                        <div class="text-center">
                            <img class="py-3" src="post_images/<?php echo  $post_picture; ?>" alt="avatar" width="50%" height="auto" />
                        </div>
                    </div>

                    <form action="" method="post" class="row ps-3 pe-4"> 
                        <div class="col-sm-10 mb-2 mt-2">
                            <input type="text" name="comment_content" class="form-control" placeholder="Write Comment" style="font-size:12px ;">
                            <input type="number" name="post_id" class="form-control" value="<?php echo  $post_id; ?>" style="display:none;">
                        </div>
                        <div class="col-sm-2" style="display: flex; justify-content: flex-end;">
                            <button  type="submit" name="submit" class="btn btn-sm btn-primary mb-2 mt-2">Comment</button>
                        </div>
                       
                    </form>
                    <div class="card-body p-4"> 

            <div class="row">
              <div class="col">
                <div class="d-flex flex-start">
                  <img class="rounded-circle shadow-1-strong me-3"
                    src="post_images/<?php echo  $post_picture; ?>" alt="avatar" width="65"
                    height="65" />
                  <div class="flex-grow-1 flex-shrink-1">
                    <div>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-1"> <?php echo  $user_name; ?>
                        </p>
                        <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> reply</span></a>
                      </div>
                      <p class="small mb-0">
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page.
                      </p>
                    </div>

                    <div class="d-flex flex-start mt-4">
                      <a class="me-3" href="#">
                        <img class="rounded-circle shadow-1-strong"
                          src="post_images/<?php echo  $post_picture; ?>" alt="avatar"
                          width="65" height="65" />
                      </a>
                      <div class="flex-grow-1 flex-shrink-1">
                        <div>
                          <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-1">
                              Simona Disa <span class="small">- 3 hours ago</span>
                            </p>
                          </div>
                          <p class="small mb-0">
                            letters, as opposed to using 'Content here, content here',
                            making it look like readable English.
                          </p>
                        </div>
                      </div>
                    </div>

                    
                  </div>
                </div>
 
              </div>
            </div>
          </div>
 
                    <div class="d-flex ps-3 pe-4" style="justify-content: flex-end;">
                        <a href="#" class=" btn-sm text-primary"><b>See all Comments</b></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
         }
      }

      
 