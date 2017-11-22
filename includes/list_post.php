<ul class="list_post">
<?php
$query_posts = mysqli_query($db->conn,"SELECT * FROM `posts` WHERE user_id='".$_SESSION['user_id']."'");
while ( $query_posts && $row_posts =  mysqli_fetch_array($query_posts) ) 
{       
    ?>
    <li>
        <h5 title="Xem thêm <?php echo stripslashes($row_posts['title'])?> " onclick="window.location.href='index.php?posts_id=<?php echo $row_posts['id'] ?>'"><i class="fa fa-chevron-right" aria-hidden="true"></i> 
                <div><?php echo stripslashes($row_posts['title'])?></div>
                <div><?php echo ngay_dang?>: <?php echo date("d-m-Y H:i",strtotime($row_posts['createdate']))?></div>

        </h5>
        <div class="content_post">
            <p><?php echo substr(stripslashes($row_posts['content']),0,50)?></p>      
        </div>
        
        
    </li>
<?php
}
?> 
</ul>