<div class="container-fluid bg" >
	<div class="row justify-content-center">
		<div class="cold-md-3 col-sm-6 col-xs-12 row-container">
			<form method="POST" enctype="multipart/form-data">
				<h3>ADD A NEW FOOD</h3>
				<p style="color:red;"><?php echo $alert??""; ?></p>
				<label>Brand: </label> 
					<select class="form-select" name="brandid">
						<?php foreach($brands as $item):  ?>
						<option value="<?=$item['id']?>"><?=$item['brand_name']?></option>
						<?php endforeach; ?>
					</select>
				<label>Food Name: </label> <input class="form-control" type="text" name="foodname" required>
				<label>Price: </label> <input class="form-control" type="text" name="price" required>
				<label>Image: </label> <input class="form-control" type="file" name="image"  required>
				<label>Details: </label> <textarea name="details" class="form-control"> </textarea>
				<label>Status: </label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="status"  value="1">
					<label class="form-check-label">
			    		Active
			  		</label>
			  	</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="status"  value="0">
					<label class="form-check-label">
			    		Unactive
			  		</label>
			  	</div>
				
				<input type="submit" name="submit" value="ADD" class="btn btn-primary" style="margin-top: 10px;width: 150px;">
			</form>
		</div>
	</div>
</div>