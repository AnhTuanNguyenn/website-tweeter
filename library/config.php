<?php
	session_start();
	$arr_lang = array();
	$arr_lang['bai_viet'] = 'New Feed';
	$arr_lang['dang_tin'] = 'Post';
	$arr_lang['thoat'] = 'Logout';
	$arr_lang['xin_chao'] = 'Hello';
	$arr_lang['nguoi_dang'] = 'Posted by';
	$arr_lang['ngay_dang'] = 'Posted on';
	$arr_lang['username_password_khong_duoc_de_trong'] = 'Username or Password is not empty!';
	$arr_lang['ten_dang_nhap_khong_dung'] = 'Username or Password is not valid !';
	$arr_lang['dang_nhap'] = 'Login';
	$arr_lang['dang_ky'] = 'Register';
	$arr_lang['username'] = 'Username';
	$arr_lang['password'] = 'Password';

	$arr_lang['neu_ban_chua_co_tai_khoan'] = 'If you have not acccount, please register';
	$arr_lang['ban_vui_long_nhap_day_du'] = 'the champs not empty ';
	$arr_lang['dang_ky_thanh_cong'] = 'Bravoooo, you are now member. Click to <a href="login.php" title="Login"> this link to login</a>';
	$arr_lang['dang_ky_that_bai'] = 'Register Failed';
	$arr_lang['ho_ten'] = 'Last & Name';
	$arr_lang['email'] = 'Email';
	$arr_lang['neu_ban_da_co_tai_khoan'] = 'If you are member, please Login';
	$arr_lang['them_bai_viet_thanh_cong'] = 'Posted Succesful';
	$arr_lang['them_bai_viet_that_bai'] = 'Posted Failed';
	$arr_lang['them_bai_viet_moi'] = 'Add New Post';
	$arr_lang['tieu_de_bai_viet'] = 'Title';
	$arr_lang['noi_dung'] = 'Content';
	$arr_lang['nhap_tieu_de_bai_viet'] = 'Insert title of the post';
	$arr_lang['nhap_noi_dung_bai_viet'] = 'Insert content of the post';
	$arr_lang['public_bai_viet'] = 'Public ?';
	$arr_lang['public_now'] = 'Public';
	$arr_lang['them_bai_viet'] = 'Add post';
	$arr_lang['ban_quyen_thuoc_ve'] = 'CoppyRight <i class="fa fa-copyright" aria-hidden="true"></i> of framework -php';

	
	foreach($arr_lang as $k=>$v)
	{
		define($k, $v);
	}

	if($_SERVER['REMOTE_ADDR']=="127.0.0.1" || $_SERVER['REMOTE_ADDR']=="::1" )
	{
		
		define("DIR", "http://localhost/website/"); 
		$user = "root"; 
		$pass = ""; 
		$host = "localhost"; 
		$database = 'website'; 
	} else 
	{
		//cai dat tren server
		// 
		define("DIR", "http://ivn.vn/customer/website/"); 
		$user = "user"; 
		$pass = ""; 
		$host = "localhost"; 
		$database = 'database';
	}

	include dirname(__FILE__)."/library.php";
	$db = new library();
	$db->connect($host,$user,$pass,$database);
?>