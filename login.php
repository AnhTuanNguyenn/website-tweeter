<?php
include("library/config.php");
?>
<?php 

if (isset($_POST["btn_submit"])) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		$err[] = username_password_khong_duoc_de_trong;
	}else{
		$sql = "select * from users where username = '$username' and password = '$password' ";
		$query = mysqli_query($db->conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			$err[] = ten_dang_nhap_khong_dung;
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
	    	}
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			$db->redirect(DIR."index.php");
		}
	}
}
?>
<html>
    <?php
    include("includes/head.php");
    ?>
    <body>
        <div class="body">
            <div class="main">
                <form method="POST" action="login.php">
					<fieldset class="login">
						<?php
						if(count($err) > 0 && is_array($err))
						{
							?>
							<ul>
								<?php
								foreach($err as $msg)
								{
									?>
									<li><?php echo $msg?></li>
									<?php
								}
								?>
							</ul>
							<?php
						}
						?>
					    <legend><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo dang_nhap?></legend>
					    	<table>
					    		<tr>
					    			<td><label><?php echo username?></label></td>
					    			<td><input type="text" name="username" size="30"></td>
					    		</tr>
					    		<tr>
					    			<td><label><?php echo password?></label></td>
					    			<td><input type="password" name="password" size="30"></td>
					    		</tr>
					    		<tr>
					    			<td colspan="2" align="center"> 
					    				<i class="fa fa-sign-in" aria-hidden="true"></i> <input type="submit" name="btn_submit" value="<?php echo dang_nhap?>">
					    				<i class="fa fa-plus-circle" aria-hidden="true"></i> <input onclick="window.location.href='register.php'" type="button" name="btn_register" value="<?php echo dang_ky?>">	
					    				<p>
					    					<label><i><?php echo neu_ban_chua_co_tai_khoan?></i></label>
					    				</p>
					    				
					    			</td>
					    		</tr>
					    	</table>
				  </fieldset>
				  </form>
            </div>
        </div>
    </body>
</html>  
