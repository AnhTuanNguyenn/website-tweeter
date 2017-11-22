<?php
	include("library/config.php");
?>
<?php
	if (isset($_POST["btn_submit"])) {
		
		$username = addslashes(strip_tags($_POST["username"]));
		$password = addslashes(strip_tags($_POST["password"]));
		$name = addslashes(strip_tags($_POST["name"]));
		$email = addslashes(strip_tags($_POST["email"]));

		if ($username == "" || $password == "" || $name == "" || $email == "") {
			$err[] =  ban_vui_long_nhap_day_du;
		}else{
			$sql = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$password', '$name', '$email', now())";

			$query_users = mysqli_query($db->conn,$sql);
			if(!empty($query_users))
			{
				$err[] = dang_ky_thanh_cong;
			} else 
			{
				$err[] = dang_ky_that_bai;
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
               <form action="register.php" method="post">
				<fieldset class="login">
				    <legend><i class="fa fa-user-plus" aria-hidden="true"></i> <?php echo dang_ky?></legend>
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
				    			<td><label><?php echo ho_ten?></label></td>
				    			<td><input type="text" name="name" size="30"></td>
				    		</tr>
				    		<tr>
				    			<td><label><?php echo email?></label></td>
				    			<td><input type="text" name="email" size="30"></td>
				    		</tr>
				    		<tr>
				    			<td colspan="2" align="center"> 
				    				<i class="fa fa-plus-circle" aria-hidden="true"></i> <input type="submit" name="btn_submit" value="<?php echo dang_ky?>">
				    				<i class="fa fa-sign-in" aria-hidden="true"></i> <input onclick="window.location.href='login.php'" type="button" name="btn_register" value="<?php echo dang_nhap?>">	
				    				<p>
					    					<label><i><?php echo neu_ban_da_co_tai_khoan?></i></label>
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
	