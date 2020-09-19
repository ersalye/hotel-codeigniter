<?php echo form_open('pages/edit/'.$page['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $page['name']); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<input type="text" name="description" value="<?php echo ($this->input->post('description') ? $this->input->post('description') : $page['description']); ?>" class="form-control" id="description" />
		</div>
	</div>
		<div class="form-group">
		<label for="description" class="col-md-4 control-label">Menu id</label>
		<div class="col-md-8">
			<input type="text" name="pid" value="<?php echo ($this->input->post('pid') ? $this->input->post('pid') : $page['pid']); ?>" class="form-control" id="pid" />
		</div>
	</div>
		<div class="form-group">
		<label for="description" class="col-md-4 control-label">URL</label>
		<div class="col-md-8">
			<input type="text" name="url" value="<?php echo ($this->input->post('url') ? $this->input->post('url') : $page['url']); ?>" class="form-control" id="url" />
		</div>
	</div>
	<div class="form-group">
		<label for="status" class="col-md-4 control-label">Status</label>
		<div class="col-md-8">
			<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $page['status']); ?>" class="form-control" id="status" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>