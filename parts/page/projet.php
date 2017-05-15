<div class="padd100">
<h1 class="text-center">Page Projet</h1>

<div class="container"><!--Start container -->

	<div class="row"><!--Start row -->
	

	<?php 			$id = $_GET['projet'];
					include ("parts/cnx.php");
                    $sql = "SELECT * FROM creation WHERE id=$id";
                    $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) { 
                        	?>
                        		
        <div class="col-sm-3">
			<img class="img-responsive center-block" src="<?=$row['image']?>" width="45%">
			<p class="text-center"><?=$row['nom']?></p>
			<p class="text-center"><?=$row['description']?></p>

		</div>
							<?php } ?>

	</div><!--End row -->

</div><!--End container -->