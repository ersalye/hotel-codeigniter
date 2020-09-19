<div class="pull-right">
	<a href="<?php echo site_url('pages/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Status</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pages as $p){ ?>
    <tr>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['name']; ?></td>
		<td><?php echo $p['description']; ?></td>
		<td><?php echo $p['status']; ?></td>
		<td>
            <a href="<?php echo site_url('pages/edit/'.$p['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pages/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
