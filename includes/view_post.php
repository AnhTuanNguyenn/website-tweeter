<ul class="view_post">
<?php
$posts_id = (int)$_GET['posts_id'];
$query_posts = mysqli_query($db->conn,"SELECT p.*,u.fullname FROM `posts` as p, `users` as u WHERE p.id='".$posts_id."' AND p.user_id='".$_SESSION['user_id']."' AND p.user_id=u.id LIMIT 1");
if ( $row_posts =  mysqli_fetch_array($query_posts) ) 
{       
    ?>
    <li>
        <h5><i class="fa fa-arrow-right" aria-hidden="true"></i> <?php echo stripslashes($row_posts['title'])?></h5>
        <div class="more">
        	<label><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo nguoi_dang?>: <?php echo $row_posts['fullname']?></label>
            <label><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo ngay_dang?>: <?php echo date("d-m-Y H:i:s",strtotime($row_posts['createdate']))?></label>
        </div>
        <p><?php echo substr(stripslashes($row_posts['content']),0,50)?></p>
    </li>
<?php
}
?> 
</ul>