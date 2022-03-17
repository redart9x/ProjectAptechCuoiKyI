<div class="container-fluid bg my-5" >
	<div class="row justify-content-center">
		<div class="row-container">
			<form method="POST" enctype="multipart/form-data">
				<h3>UPDATE THIS FOOD</h3>
				<p style="color:red;"><?php echo $alert??""; ?></p>
				<!-- <label>ID: </label>  -->
				<input style="display: none" class="form-control" type="text" name="foodid" value="<?=$result['id']?>">
				<label for="brand">Brand: </label> 
					<select id="brand" class="form-select" name="brandid">
						<?php foreach($brands as $item):  ?>
						<option value="<?=$item['id']?>" <?=$item['id']==$_GET['brandid']?"selected":""?>><?=$item['name']?></option>
					<?php endforeach; ?>
					</select>
				<label for="food">Food Name: </label> <input class="form-control" id="food" type="text" name="foodname" required value="<?=$result['name']?>">
				<label for="price">Price: </label> <input class="form-control" id="price" type="text" name="price" required value="<?=$result['price']?>">
				<label for="image">Image: </label> <input class="form-control" id="image" type="file" name="image" >
				<img src="../image/<?=$result['image']?>" alt="" class="img-thumbnail">
				<label for="detail">Details: </label> 
					<textarea id="detail" rows="4" name="details" class="form-control"><?=$result['detail']?></textarea>
				<label>Status: </label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="status" id="food-acttive" value="1" <?=$result['status']==1? "checked":""?>>
						<label class="form-check-label" for="food-active">
				    		Kích hoạt
				  		</label>
				  	</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="status" id="food-unactive" value="0" <?=$result['status']==0? "checked":""?>>
						<label class="form-check-label" for="food-unactive">
				    		Hủy kích hoạt
				  		</label>
				  	</div>
				
				<input type="submit" name="submit" value="Thêm mới" class="btn btn-primary" style="margin-top: 10px;width: 150px;">
			</form>
		</div>
	</div>
</div>