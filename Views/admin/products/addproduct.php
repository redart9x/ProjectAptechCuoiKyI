<div class="container-fluid bg my-5" >
	<div class="row justify-content-center">
		<div class="row-container">
			<form method="POST" enctype="multipart/form-data">
				<h3>ADD A NEW FOOD</h3>
				<p style="color:red;"><?php echo $alert??""; ?></p>
				<label for="brand">Brand: </label> 
					<select id="brand" class="form-select" name="brandid">
						<?php foreach($brands as $item):  ?>
						<option value="<?=$item['id']?>"><?=$item['name']?></option>
						<?php endforeach; ?>
					</select>
				<label for="food">Food Name: </label> <input class="form-control" id="food" type="text" name="foodname" required>
				<label for="price">Price: </label> <input class="form-control" id="price" type="text" name="price" required>
				<label for="image">Image: </label> <input class="form-control" id="image" type="file" name="image"  required>
				<label for="detail">Details: </label> <textarea name="details" id="detail" rows="4" class="form-control"> </textarea>
				<label>Status: </label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="status" id="food-active" value="1">
					<label class="form-check-label" for="food-active">
			    		Kích hoạt
			  		</label>
			  	</div>
				<div class="form-check">
					<input class="form-check-input" id="food-unactive" type="radio" name="status"  value="0">
					<label class="form-check-label" for="food-unactive">
			    		Hủy kích hoạt
			  		</label>
			  	</div>
				
				<input type="submit" name="submit" value="Thêm mới" class="btn btn-primary" style="margin-top: 10px;width: 150px;">
			</form>
		</div>
	</div>
</div>