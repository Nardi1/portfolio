<div class="padd100">
<h1 class="text-center titre-page">Créations</h1>

<div class="container"><!--Start container -->

	<div class="row"><!--Start row -->
	<?php 
					include ("parts/cnx.php");
                    $sql = "SELECT * FROM creation";
                    $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) { 
                        	?>
                        		
        <div class="col-sm-3">
			<a href="index.php?page=projet&projet=<?=$row['id']?>"><img class="img-responsive center-block" src="<?=$row['image']?>">
			<div class="portfolio-caption">
                        <h4 class="text-center"><?=$row['nom']?></h4>
            
                    </div> </a>
		</div>
							<?php } ?>

	</div><!--End row -->

</div><!--End container -->