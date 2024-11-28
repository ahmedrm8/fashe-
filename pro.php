<?php 
                include "admin/functions/connect.php";
                $select = "SELECT * FROM products";
                $query = $conn -> query($select);
                foreach($query as $product){
	             ?>
				<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
	            <!-- Block2 -->
	       
	     	<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
			<img src="admin/images/<?=  $product['img']?>" alt="IMG-PRODUCT">
				<?php
				}
				?>