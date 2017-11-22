<?php require_once("includes/connection.php"); ?>
<?php include "includes/header.php" ?>
<?php
	$id = -1;
	if (isset($_GET["id"])) {
		$id = intval($_GET['id']);
	}
	
	$sql = "select * from posts where id = $id";
	
	$query = mysqli_query($conn,$sql);
?>
			<div class="innertube">
			<?php 
				while ( $data = mysqli_fetch_array($query) ) {
			?>
				<h3><?php echo $data['title']; ?></h3></div><br>
				<i> Date Created : <?php echo $data['createdate']; ?></i>
				<p><?php echo $data['content']; ?></p>
			<?php } ?>
	<?php include "includes/menu.php" ?>
