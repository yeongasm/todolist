<script src="../js/create_pin.js"></script>
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

	<div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Create Pin</h4>
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div id="err_msg">
		</div>
		<form id="ajax_form" class="form" action="create_pin.script.php">
			<div class="modal-body">
				<div class="form-group row">
					<label for="#pin_name" class="col-form-label input_label">Pin Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="pin_name" name="pinname" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="#pin_tag" class="col-form-label input_label">Category</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="pin_tag" name="pintag" data-role="tagsinput">
					</div>
				</div>
				<div class="form-group row">
					<label for="#pin_text" class="col-form-label input_label">Text</label>
					<div class="col-sm-10">
						<textarea type="text" class="form-control" id="pin_text" maxlength="500" name="pintext" required></textarea>
						<div id="charnum"></div>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
		  		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  		<button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
			</div>
		</form>	
	</div>
  
</div>
</div>
