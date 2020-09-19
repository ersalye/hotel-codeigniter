   <?php  $this->load->view('shop/shop-header');	?>	
   
	   <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                 <div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
          <form role="form" method="POST" action="" enctype="multipart/form-data" onkeypress="return disableEnterKey(event);">
               <input type="hidden" name="_token" value="nI3iIWhPzsnV4RbGTMZKIF5q8dkYdkMyR1T3afeZ">
               <input type="hidden" name="_method" value="PATCH">
               <input type="hidden" id="latitude" name="latitude" value="13.0587107" readonly required>
               <input type="hidden" id="longitude" name="longitude" value="80.2757063" readonly required>
                <h4 class="m-t-0 header-title">
                    <b>Edit Shop</b>
				
                </h4>
                <hr>
				<?php echo $this->session->flashdata('Update'); 
				//print_r($profile);?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name<?php //print_r($profile);  ?></label>
			<input type="hidden"  name="shoplg" value="<?php if (!empty($profile)){echo $profile['shop_logo']; }?>">
          <input id="name" readonly type="text" class="form-control" name="name" value="<?php if (!empty($profile)){echo $profile['name']; }?>" required autofocus>

                                                    </div>

                        <div class="form-group">
                            <label for="email">E-Mail Address</label>

                            <input readonly id="email" type="text" class="form-control" name="email" value="<?php if (!empty($profile)){echo $profile['email']; }?>" required autofocus>

                                                    </div>
                        <div class="form-group">
                            <label for="parent_id">Cuisine </label>
							<?php   $profile['Cuisine']; 
								$str = $profile['Cuisine'];
								$peo = explode(",",$str); ?>
                               <select readonly class="form-control" multiple id="cuisine_id" name="cuisine_id[]">
				<?php
				foreach($csns as $c){ ?>
			<option disabled value="<?php echo $c['id']; ?>" <?php if (in_array($c['id'], $peo)){echo 'selected="selected"'; }?>><?php echo $c['name']; ?></option>	

						<?php }?>
                        </select>

                                                    </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>

                            <input readonly id="phone" type="text" class="form-control" name="phone" value="<?php if (!empty($profile)){echo $profile['phone']; }?>" required autofocus>

                                                    </div>

						<!--	<div class="form-group">
                            <label for="password">Password</label>

                            <input id="password" type="password" class="form-control" name="password">

                                                    </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div> -->

                        <div class="form-group ">
                            <label for="parent_id">Status</label>
                            <select readonly class="form-control"  id="status" name="status">
							<?php if (!empty($profile)){?> 
                                <option disabled value="onboarding" <?=$profile['status'] == 'onboarding' ? ' selected="selected"' : '';?>>Onboarding</option>
                                <option disabled value="banned" <?=$profile['status'] == 'banned' ? ' selected="selected"' : '';?>>Banned</option>    
							<option disabled value="active" <?=$profile['status'] == 'active' ? ' selected="selected"' : '';?>>Active</option><?php }?>
                                 
                            </select>
                        </div>
                         <div class="form-group">
                                    <label for="password-confirm">Resturant Open Timing</label> 
                                     <input id="everyday" type="checkbox" checked  name="everyday" value="1" > (Everyday)
                                 </div>
								 <div class="row">
                                    <div class="col-xs-4">
                                       
                                    </div>
                                    <div class="col-xs-4 text-xs-center">
                                       <div>
                                          <label for="hours_opening"><b>Resturant Opens</b></label>
                                          
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <label for="hours_closing"><b>Resturant Closes</b></label>
                                          
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row everyday">
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <label for="hours_opening">Everyday</label>
                                          <input type="checkbox" class="chk"  <?php if (!empty($profile)){if($profile['everyday']=="ALL"){?> checked <?php } }?>   name="day" value="ALL" >
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m_hours_opening" value="<?php if (!empty($profile)){echo $profile['m_resturant_opens']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m_hours_closing" value="<?php if (!empty($profile)){echo $profile['m_resturant_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
									<div class="col-xs-4">
                                       
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e_hours_opening" value="<?php if (!empty($profile)){echo $profile['e_resturant_opens']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e_hours_closing" value="<?php if (!empty($profile)){echo $profile['e_resturant_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row   singleday " style="display:none" >
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <label for="hours_opening">Sunday</label>
                                          <input type="checkbox" class="chk"   name="day[SUN]" value="SUN" >
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
										  <?php //print_r($time); ?>
                                             <input type="text" class="form-control" name="m-hours_opening[SUN]" value="<?php if (!empty($time)){echo $time['sun_morning_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_closing[SUN]" value="<?php if (!empty($time)){echo $time['sun_morning_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
									<div class="col-xs-4">
                                       
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_opening[SUN]" value="<?php if (!empty($time)){echo $time['sun_evening_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_closing[SUN]" value="<?php if (!empty($time)){echo $time['sun_evening_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row   singleday " style="display:none">
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <label for="hours_opening">Monday</label>
                                          <input type="checkbox" class="chk"   name="day[MON]" value="MON" >
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_opening[MON]" value="<?php if (!empty($time)){echo $time['m_morning_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_closing[MON]" value="<?php if (!empty($time)){echo $time['m_morning_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
									<div class="col-xs-4">
                                       
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_opening[MON]" value="<?php if (!empty($time)){echo $time['m_evening_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_closing[MON]" value="<?php if (!empty($time)){echo $time['m_evening_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row   singleday " style="display:none">
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <label for="hours_opening">Tuesday</label>
                                          <input type="checkbox" class="chk"   name="day[TUE]" value="TUE" >
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_opening[TUE]" value="<?php if (!empty($time)){echo $time['t_morning_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_closing[TUE]" value="<?php if (!empty($time)){echo $time['t_morning_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
									<div class="col-xs-4">
                                       
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_opening[TUE]" value="<?php if (!empty($time)){echo $time['t_evening_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_closing[TUE]" value="<?php if (!empty($time)){echo $time['t_evening_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row   singleday " style="display:none" >
                                    <div class="col-xs-4">
                                       <div class="form-group">
									   <label for="hours_opening">Wednesday</label>
                                          <input type="checkbox" class="chk"   name="day[WED]" value="WED" >
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_opening[WED]" value="<?php if (!empty($time)){echo $time['w_morning_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_closing[WED]" value="<?php if (!empty($time)){echo $time['w_morning_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
									<div class="col-xs-4">
                                       
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_opening[WED]" value="<?php if (!empty($time)){echo $time['w_evening_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_closing[WED]" value="<?php if (!empty($time)){echo $time['w_eveningclose']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row   singleday " style="display:none"  >
                                    <div class="col-xs-4">
                                       <div class="form-group">
									   <label for="hours_opening">Thursday</label>
                                          <input type="checkbox" class="chk"   name="day[THU]" value="THU" >
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_opening[THU]" value="<?php if (!empty($time)){echo $time['th_morning_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_closing[THU]" value="<?php if (!empty($time)){echo $time['th_morning_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
									<div class="col-xs-4">
                                       
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_opening[THU]" value="<?php if (!empty($time)){echo $time['th_evening_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_closing[THU]" value="<?php if (!empty($time)){echo $time['th_evening_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row   singleday " style="display:none" >
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <label for="hours_opening">Friday</label>
                                          <input type="checkbox" class="chk"   name="day[FRI]" value="FRI" >
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_opening[FRI]" value="<?php if (!empty($time)){echo $time['f_morning_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_closing[FRI]" value="<?php if (!empty($time)){echo $time['f_morning_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
									<div class="col-xs-4">
                                       
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_opening[FRI]" value="<?php if (!empty($time)){echo $time['f_evening_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_closing[FRI]" value="<?php if (!empty($time)){echo $time['f_evening_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row   singleday " style="display:none">
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <label for="hours_opening">Saturday</label>
                                          <input type="checkbox" class="chk"   name="day[SAT]" value="SAT" >
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_opening[SAT]" value="<?php if (!empty($time)){echo $time['s_morning_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div class="form-group">
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="m-hours_closing[SAT]" value="<?php if (!empty($time)){echo $time['s_morning_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
									<div class="col-xs-4">
                                       
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_opening[SAT]" value="<?php if (!empty($time)){echo $time['f_evening_open']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-4">
                                       <div>
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="e-hours_closing[SAT]" value="<?php if (!empty($time)){echo $time['f_evening_close']; }?>" >
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                        
                      <!--  <div class="form-group">
                            <label for="avatar">admin.shops.create.image</label>

                            <input type="file" accept="image/*" name="avatar" class="dropify" id="avatar" aria-describedby="fileHelp"  data-default-file="<?php echo base_url(); ?>/uploads/images/<?php echo $profile['shop_logo']; ?>" >
                        </div>-->
                        <div class="form-group">
                            <label for="avatar">Shop Banner</label>

                            <input type="file" accept="image/*" name="default_banner" class="dropify" id="default_banner" aria-describedby="fileHelp"  data-default-file="<?php echo base_url(); ?>/uploads/images/<?php echo $profile['shop_logo']; ?>" >

                                                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="parent_id">Is Pure Veg ?</label>
                                   <select class="form-control" id="pure_veg" name="pure_veg">
                                <?php if (!empty($profile)){ ?>
                    <option value="0" <?=$profile['pure_veg'] == '0' ? ' selected="selected"' : '';?>>None</option>
					<option value="Pure Veg" <?=$profile['pure_veg'] == 'Pure Veg' ? ' selected="selected"' : '';?>>Pure veg</option>
                    <option value="Halal" <?=$profile['pure_veg'] == 'Halal' ? ' selected="selected"' : '';?>>Halal</option>
					<option value="Gluten free" <?=$profile['pure_veg'] == 'Gluten free' ? ' selected="selected"' : '';?>>Gluten free</option>
					<?php  } else{ ?>
					<option value="0">None</option>
                   <option value="Pure Veg">Pure veg</option>
                   <option value="Halal">Halal</option>
				   <option value="Gluten free">Gluten free</option>
				   
					 <?php } ?>	
                            </select>

                                                                    </div>
                            </div>
                            
							<div class="col-sm-12">
                                <div class="form-group">
                                    <label for="offer_min_amount">Min Amount</label>
                                    <input readonly tabindex="2" id="delivery_min_amount" class="form-control controls" type="number" placeholder="Enter Min Amount For Offer" name="delivery_min_amount" value="<?php if (!empty($profile)){echo $profile['min_amount']; }?>">
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <label for="offer_min_amount">Discount</label>
                                    <input tabindex="2" id="offer_min_amount" class="form-control controls" type="number" placeholder="Enter Min Amount For Offer" name="discount" value="<?php if (!empty($profile)){echo $profile['discount']; }?>">
                                </div>
                            </div>
							<div class="col-sm-12">
                                    <label for="offer_min_amount">Min Amount For Offer </label>
					<input tabindex="2" id="offer_min_amount" min="0" class="form-control controls" type="number" placeholder="Enter Min Amount For Offer" name="offer_min_amount" value="<?php if (!empty($profile)){echo $profile['min_amount_offer']; }?>">
                                </div>
								<div class="col-sm-12">
                                    <label for="offer_min_amount">Offer title</label>
					<input tabindex="2" id="offertitle" min="0" class="form-control controls" required type="text" placeholder="Enter Min Amount For Offer" name="offertitle" value="<?php if (!empty($profile)){echo $profile['offertitle']; }?>">
                                </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="offer_percent">Offer in Percentage</label>
                                    <input readonly tabindex="2" id="offer_percent" class="form-control controls" type="number" placeholder="Enter amount in Percent" name="offer_percent" value="<?php if (!empty($profile)){echo $profile['offer_percentage']; }?>">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="estimated_delivery_time">Max Delivery Time</label>
                   <input readonly tabindex="2" id="estimated_delivery_time" class="form-control controls" type="number" placeholder="Enter Max Delivery Time" name="estimated_delivery_time" value="<?php if (!empty($profile)){echo $profile['estimated_delivery_time']; }?>">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea readonly class="form-control"  placeholder="Enter Description" id="description" name="description" required><?php if (!empty($profile)){echo $profile['description']; }?></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="maps_address">Location</label>
                        <input readonly tabindex="2" id="pac-input" class="form-control controls" type="text" placeholder="Enter Shop Location" name="maps_address" value="<?php if (!empty($profile)){echo $profile['address']; }?>">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group form-group-default required m-t-5">
                                    <label>Address</label>
                                    <textarea readonly class="form-control" placeholder="Enter Address" id="address" name="address" required><?php if (!empty($profile)){echo $profile['address']; }?></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div id="map" style="height:400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 mb-2">
                    <a href="<?php echo base_url(); ?>Shop" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check-square-o"></i> Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>




    <footer class="footer footer-static footer-light navbar-border">
         <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-xs-block d-md-inline-block">
                © 2018 Storkks 
            </span>
        </p>
            
    </footer>
    <script>
    var resizefunc = [];
    </script>

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/unslider-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/horizontal-timeline.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
        <!-- BEGIN STACK JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/app-menu.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/customizer.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jszip.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/pdfmake.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/vfs_fonts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jquery.raty.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/datatable-advanced.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/star.rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/froala_editor.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/dropify.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/bootstrap-clockpicker.min.js" type="text/javascript"></script>
    <!-- END STACK JS-->
        
     <!-- BEGIN PAGE LEVEL JS-->
   
   <script type="text/javascript">
    function disableEnterKey(e)
    {
        var key;
        if(window.e)
            key = window.e.keyCode; // IE
        else
            key = e.which; // Firefox

        if(key == 13)
            return e.preventDefault();
    }
    $('.clockpicker').clockpicker({
        donetext: "Done"
    });
    $('.dropify').dropify();
    $('#everyday').change(function() {
        if($(this).is(":checked")) {
            $('.everyday').show();
            $('.singleday').hide();
            $('.singleday .chk').prop('checked',false);
            $('.everyday .chk').prop('checked',true);
        }else{
            $('.everyday').hide();
            $('.singleday').show();
            $('.everyday .chk').prop('checked',false);
            $('.singleday .chk').prop('checked',true);
        }
    });
</script>
<script>
    var map;
    var input = document.getElementById('pac-input');
    var latitude = document.getElementById('latitude');
    var longitude = document.getElementById('longitude');
    var address = document.getElementById('address');

    function initMap() {

        var userLocation = new google.maps.LatLng(
                13.0796758,
                80.2696968
            );

        map = new google.maps.Map(document.getElementById('map'), {
            center: userLocation,
            zoom: 15
        });

        var service = new google.maps.places.PlacesService(map);
        var autocomplete = new google.maps.places.Autocomplete(input);
        var infowindow = new google.maps.InfoWindow();

        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow({
            content: "Shop Location",
        });

        var marker = new google.maps.Marker({
            map: map,
            draggable: true,
            anchorPoint: new google.maps.Point(0, -29)
        });

        marker.setVisible(true);
        marker.setPosition(userLocation);
        infowindow.open(map, marker);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(location) {
                var userLocation = new google.maps.LatLng(
                    location.coords.latitude,
                    location.coords.longitude
                );
                marker.setPosition(userLocation);
                map.setCenter(userLocation);
                map.setZoom(13);
            });
        }

        google.maps.event.addListener(map, 'click', updateMarker);
        google.maps.event.addListener(marker, 'dragend', updateMarker);

        function updateMarker(event) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({'latLng': event.latLng}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        input.value = results[0].formatted_address;
                        updateForm(event.latLng.lat(), event.latLng.lng(), results[0].formatted_address);
                    } else {
                        alert('No Address Found');
                    }
                } else {
                    alert('Geocoder failed due to: ' + status);
                }
            });

            marker.setPosition(event.latLng);
            map.setCenter(event.latLng);
        }

        autocomplete.addListener('place_changed', function(event) {
            marker.setVisible(false);
            var place = autocomplete.getPlace();

            if (place.hasOwnProperty('place_id')) {
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }
                updateLocation(place.geometry.location);
            } else {
                service.textSearch({
                    query: place.name
                }, function(results, status) {
                    if (status == google.maps.places.PlacesServiceStatus.OK) {
                        updateLocation(results[0].geometry.location, results[0].formatted_address);
                        input.value = results[0].formatted_address;
                    }
                });
            }
        });

        function updateLocation(location) {
            map.setCenter(location);
            marker.setPosition(location);
            marker.setVisible(true);
            infowindow.open(map, marker);
            updateForm(location.lat(), location.lng(), input.value);
        }

        function updateForm(lat, lng, addr) {
            console.log(lat,lng, addr);
            latitude.value = lat;
            longitude.value = lng;
            address.value = addr;
        }
    }
</script>
<script>

 window.setTimeout(update, 1000);
function update() {

  var Url = '<?php echo site_url('Shop/Orderscount/');?>';
$.ajax({
                url : Url,
                method : "POST",
				//dataType:"json",   
				success: function(data){
			
				 window.setTimeout(update, 1000);
				console.log(data);
				 $("#tot_incom_order").html(data);
   
                },
    error: function(){
      		alert("load customer address");
    }
            });
}
</script>  
     <script src="<?php echo base_url(); ?>restaurant-assets/js/dashboard-ecommerce.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>restaurant-assets/js/scripts.js" type="text/javascript"></script>


</body>
</html>