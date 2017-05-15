<div class="padd100"></div>
<div class="hidden-sm hidden-md hidden-lg" style="padding-top:150px"></div>
<h1 class="text-center">Page Projet</h1>

<div class="container"><!--Start container -->

	<div class="row"><!--Start row -->
	

	<?php 			$id = $_GET['projet'];
					include ("parts/cnx.php");
                    $sql = "SELECT * FROM creation WHERE id=$id";
                    $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) { 
                        	?>
                        		
        <div class="col-sm-6 bloc-projet-left">
			<img class="img-responsive center-block" src="<?=$row['image']?>">
		</div>
		 <div class="col-sm-6 bloc-projet-right">
			<p class="text-center title-project"><?=$row['nom']?></p>
			<p class="text-center p-project"><?=$row['description']?></p>

		</div>
							<?php } ?>

	</div><!--End row -->

</div><!--End container -->