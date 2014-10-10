<div id="parallax"> 
	<?php
	$wrds = array("path","microsoft = 10","albert einstein = 9","mercedes benz = 11","harry potter = 11","louis vuitton = 8","linkedin.com = 10","google.com = 11","delicious.com = 11", "flickr.com = 9");
	$width = 1200;
	$height = 450;
	foreach($wrds as $w):?>
	<div style="width:<?php echo rand(1200, 2000);?>px; height:<?php echo rand(320, 540);?>px;"> 
		<div style="position:absolute; top:<?php echo rand(140, 280);?>px; left:<?php echo rand(150, 780);?>px; color:#9bc0e5"> 
		<?php echo $w;?>
		</div> 
	</div> 
	<?php endforeach;?>
</div> 

