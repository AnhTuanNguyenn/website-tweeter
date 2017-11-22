<?php
include("library/config.php");
if(empty($_SESSION['username']))
{
    $db->redirect(DIR."login.php");
    exit;
}
?>
<html>
    <?php
    include("includes/head.php");
    ?>
    <body>
        <div class="body">
            <?php
            include("includes/menu.php");
            ?>
            <div class="main">
                <?php
                if(!empty($_GET['posts_id']))
                {
                   include("includes/view_post.php");
                } else 
                {
                    include("includes/list_post.php");
                }
                ?>
            </div>
            <?php
            include("includes/footer.php");
            ?>
        </div>
    </body>
</html>
