<?php
$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql);
?>

<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<a href="index.php" class="navbar-brand">up for calls</a>
				<ul class="nav navbar-nav">
				<?php
				while($parent = mysqli_fetch_assoc($pquery)):
				?>
				   <!-- men clothes-->
				   
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent["category"];?><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						 <?php while($child = mysqli_fetch_assoc($cquery)) : ?>
							<li><a href="#"><?php echo $child["category"]; ?></a></li>
							<?php endwhile; ?>
						</ul>
					</li>
				    </ul>
					<?php endwhile;?>
			</div>
		</nav>