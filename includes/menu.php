<div class="menu">
    <ul>
        <li class="active"><a href="<?php echo DIR?>index.php" title="<?php echo bai_viet?>"><i class="fa fa-home" aria-hidden="true"></i> <?php echo bai_viet?></a></li>
        <li>
           <a href="<?php echo DIR?>admin/post.php" title="<?php echo dang_tin?>"><i class="fa fa-telegram" aria-hidden="true"></i> <?php echo dang_tin?></a>
        </li>
        <li>
           <label><?php echo xin_chao?>: <?php echo $_SESSION['username']?></label> <a href="<?php echo DIR?>logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo thoat?></a>
        </li>
    </ul>
</div>