<?php
class library {
	var $conn = null;
	function library(){

	}

	public function connect($host="localhost",$user_db="root",$pass_db="root",$db="domain_db")
	{
		$conn = mysqli_connect($host,$user_db,$pass_db,$db) or die("Can not connect to BD");
		
		mysqli_query($conn,"SET NAMES 'UTF8'");
		return $this->conn = $conn;
	}

	public function redirect($path=dir,$msg="") {
		if(!empty($msg)) {
			$_SESSION['error'] = $msg;	
		}
		?>
		<script>window.location.href = '<?=$path?>';</script>
		<?
	}
}
?>