<div class="container-fluid bg" >
	<div class="row justify-content-center">
		<div class="cold-md-3 col-sm-6 col-xs-12 row-container">
			<form method="POST">
				<h3>ADD A NEW BRAND</h3>
				<p style="color:red;"><?php echo $alert??""; ?></p>
				<label>ID: </label> <input class="form-control" type="text" name="brandId" readonly>
				<label>Name: </label> <input class="form-control" type="text" name="brandName" required>
				<label>Status: </label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="brandStatus"  value="1">
						<label class="form-check-label">
				    		Active
				  		</label>
				  	</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="brandStatus"  value="0">
						<label class="form-check-label">
				    		Unactive
				  		</label>
				  	</div>
				<input type="submit" name="submit" value="ADD" class="btn btn-primary" style="margin-top: 10px;width: 150px;">
			</form>
		</div>
	</div>
</div>