<div class="container-fluid bg" >
	<div class="row justify-content-center">
		<div class="cold-md-3 col-sm-6 col-xs-12 row-container">
			<form method="POST" enctype="multipart/form-data">
				<h3>UPDATE THIS FOOD</h3>
				<p style="color:red;"><?php echo $alert??""; ?></p>
				<label>ID: </label> <input class="form-control" type="text" name="foodid" readonly value="<?=$result['id']?>">
				<label>Brand: </label> 
					<select class="form-select" name="brandid">
						<?php foreach($brands as $item):  ?>
						<option value="<?=$item['id']?>" <?=$item['id']==$_GET['brandid']?"selected":""?>><?=$item['brand_name']?></option>
					<?php endforeach; ?>
					</select>
				<label>Food Name: </label> <input class="form-control" type="text" name="foodname" required value="<?=$result['name']?>">
				<label>Price: </label> <input class="form-control" type="text" name="price" required value="<?=$result['price']?>">
				<label>Image: </label> <input class="form-control" type="file" name="image" >
				<img src="../image/<?=$result['image']?>" alt="" class="img-thumbnail">
				<label>Details: </label> 
					<textarea name="details" class="form-control"><?=$result['detail']?></textarea>
				<label>Status: </label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="status"  value="1" <?=$result['status']==1? "checked":""?>>
						<label class="form-check-label">
				    		Active
				  		</label>
				  	</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="status"  value="0" <?=$result['status']==0? "checked":""?>>
						<label class="form-check-label">
				    		Unactive
				  		</label>
				  	</div>
				
				<input type="submit" name="submit" value="ADD" class="btn btn-primary" style="margin-top: 10px;width: 150px;">
			</form>
		</div>
	</div>
</div>