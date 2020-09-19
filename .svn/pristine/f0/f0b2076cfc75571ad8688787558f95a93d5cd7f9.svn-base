<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>MOB AUTHENTICATED</th>
		<th>EMAIL AUTHENTICATED</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>MOBILENO</th>
		<th>PASSWRD</th>
		<th>DOB</th>
		<th>MARRAGESTATUS</th>
		<th>GENDER</th>
		<th>REFCODE</th>
		<th>REFBY</th>
		<th>LOGINRETYCOUNT</th>
		<th>LOGINLOCKDATE</th>
		<th>LASTLOGIN</th>
		<th>USRSTS</th>
		<th>OTP</th>
		<th>USR KEY</th>
		<th>PROFILE PICTURE</th>
		<th>LINKEDIN ID</th>
		<th>Actions</th>
    </tr>
	<?php foreach($vh_usr as $v){ ?>
    <tr>
		<td><?php echo $v['ID']; ?></td>
		<td><?php echo $v['MOB_AUTHENTICATED']; ?></td>
		<td><?php echo $v['EMAIL_AUTHENTICATED']; ?></td>
		<td><?php echo $v['NAME']; ?></td>
		<td><?php echo $v['EMAIL']; ?></td>
		<td><?php echo $v['MOBILENO']; ?></td>
		<td><?php echo $v['PASSWRD']; ?></td>
		<td><?php echo $v['DOB']; ?></td>
		<td><?php echo $v['MARRAGESTATUS']; ?></td>
		<td><?php echo $v['GENDER']; ?></td>
		<td><?php echo $v['REFCODE']; ?></td>
		<td><?php echo $v['REFBY']; ?></td>
		<td><?php echo $v['LOGINRETYCOUNT']; ?></td>
		<td><?php echo $v['LOGINLOCKDATE']; ?></td>
		<td><?php echo $v['LASTLOGIN']; ?></td>
		<td><?php echo $v['USRSTS']; ?></td>
		<td><?php echo $v['OTP']; ?></td>
		<td><?php echo $v['USR_KEY']; ?></td>
		<td><?php echo $v['PROFILE_PICTURE']; ?></td>
		<td><?php echo $v['LINKEDIN_ID']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$v['ID']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$v['ID']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
