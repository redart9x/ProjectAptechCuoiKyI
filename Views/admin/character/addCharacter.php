<div class="container-fluid bg my-5" >
	<div class="row justify-content-center">
		<div class="row-container">
			<form method="POST" enctype="multipart/form-data">
				<h3>ADD A NEW CHARACTER</h3>
				<p style="color:red;"><?php echo $alert??""; ?></p>
				<label for="name">Character Name: </label> <input class="form-control" id="name" type="text" name="characterName" required>
				<label for="image">Image: </label> <input class="form-control" id="image" type="file" name="image"  required>
				<label for="story">Story: </label> <textarea name="story" id="story" rows="4" class="form-control"> </textarea>
				<label>Status: </label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="status"  value="1">
						<label class="form-check-label">
				    		Kích hoạt
				  		</label>
				  	</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="status"  value="0">
						<label class="form-check-label">
				    		Hủy kích hoạt
				  		</label>
				  	</div>
				
				<input type="submit" name="submit" value="Thêm mới" class="btn btn-primary" style="margin-top: 10px;width: 150px;">
			</form>
		</div>
	</div>
</div>