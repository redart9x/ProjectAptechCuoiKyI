<div class="container-fluid bg my-5" >
	<div class="row justify-content-center">
		<div class="row-container">
			<form method="POST" enctype="multipart/form-data">
				<h3>UPDATE THIS CHARACTER</h3>
				<p style="color:red;"><?php echo $alert??""; ?></p>
				<label for="name">Character Name: </label> <input class="form-control" id="name" type="text" name="name" required value="<?=$result['name']?>">
				<label for="image">Image: </label> <input class="form-control" id="image" type="file" name="image" >
				<img src="../image/character/<?=$result['image']?>" alt="" class="img-thumbnail">
				<label for="story">Story: </label> 
					<textarea id="story" rows="4" name="story" class="form-control"><?=$result['story']?></textarea>
				<label>Status: </label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="status" id="character-active" value="1" <?=$result['status']==1? "checked":""?>>
						<label class="form-check-label" for="character-active">
				    		Active
				  		</label>
				  	</div>
					<div class="form-check">
						<input class="form-check-input" id="character-unactive" type="radio" name="status"  value="0" <?=$result['status']==0? "checked":""?>>
						<label for = "character-unactive" class="form-check-label">
				    		Unactive
				  		</label>
				  	</div>
				
				<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary" style="margin-top: 10px;width: 150px;">
			</form>
		</div>
	</div>
</div>