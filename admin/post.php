<?php
	include("../library/config.php");
	if(empty($_SESSION['username']))
	{
	    $db->redirect("login.php");
	    exit;
	}
?>
<?php
	if (isset($_POST["btn_submit"])) {
		$title = addslashes($_POST["title"]);
		$content = addslashes($_POST["content"]);
		$is_public = 0;
		if (isset($_POST["is_public"])) 
		{
			$is_public = $_POST["is_public"];
		}
		
		$user_id = $_SESSION["user_id"];
 
		$sql = "INSERT INTO posts(title, content, user_id, is_public, createdate, updatedate ) VALUES ( '$title', '$content', '$user_id', '$is_public', now(), now())";
		
		$query_post = mysqli_query($db->conn,$sql);
		if(!empty($query_post))
		{
			$err[] =  them_bai_viet_thanh_cong;
		} else 
		{
			$err[] = them_bai_viet_that_bai;
		}
		
	}
 
?>

<html>
    <?php
    include("../includes/head.php");
    ?>
    <body>
        <div class="body">
        	<?php
            include("../includes/menu.php");
            ?>
            <div class="main">
                <form action="post.php" method="post">
					<table class="post">
						<tr>
							<td colspan="2"><h3><i class="fa fa-arrow-right" aria-hidden="true"></i> <?php echo them_bai_viet_moi?></h3></td>
						</tr>	
						<tr>
							<td width="20%"><?php echo tieu_de_bai_viet?> :</td>
							<td width="70%"><input type="text" id="title" name="title" placeholder="<?php echo nhap_tieu_de_bai_viet?>"></td>
						</tr>
						<tr>
							<td width="20%"><?php echo noi_dung?> :</td>
							<td width="70%"><textarea name="content" id="content" maxlength="250" placeholder="<?php echo nhap_noi_dung_bai_viet?>"></textarea></td>
						</tr>
						<tr>
							<td width="20%"><?php echo public_bai_viet?> :</td>
							<td><input type="checkbox" id="is_public" name="is_public" value="1"> <?php echo public_now?></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="btn_submit" value="<?php echo them_bai_viet?>"></td>
						</tr>
					</table>
					
				</form>
            </div>
            <?php
            include("../includes/footer.php");
            ?>
        </div>
    </body>
</html>  