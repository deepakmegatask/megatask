<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css"> 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <a href="<?php echo base_url();?>admin/cities"> <i class="fa fa-users" aria-hidden="true"></i> City</a>
        <small>Edit</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <div class="col-md-12">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                       
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                   <form role="form" id="member_form" action="<?php echo base_url() ?>admin/cities/update" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                     <!--Country Name-->
                                     <div class="form-group">
                                        <label for="country_id">Country Name <span class="text-danger">*</span></label>
                                        <select class="form-control" name="country_id" id="country_id" class="form-control" required> 
                                            <option value="">Select</option>
                                             <?php
                                                if(!empty($country_list))
                                                {
                                                     foreach ($country_list as $key => $value) 
                                                     {
                                                         ?>
                                                            <option value="<?php echo $value->id;?>" <?php if($edit_data->country_id == $value->id){ echo "selected"; }?> ><?php echo $value->name;?>-  <?php echo $value->countryCode;?></option>
                                                         <?php

                                                     }
                                                }
                                             ?>
                                        </select>
                                    </div>
                                    <!--State Name-->
                                       <div class="form-group">
                                        <label for="state_id">State Name <span class="text-danger">*</span></label>
                                        <select class="form-control" name="state_id" id="state_id" class="form-control" required> 
                                            <option value="">Select</option>
                                             <?php
                                                if(!empty($state_list))
                                                {
                                                     foreach ($state_list as $key => $value) 
                                                     {
                                                         ?>
                                                         <option value="<?php echo $value->id;?>" <?php if($edit_data->state_id == $value->id){ echo "selected"; }?> ><?php echo $value->name;?></option>
                                                         <?php

                                                     }
                                                }
                                             ?>
                                        </select>
                                    </div>

                                    <!-- user type-->
                                    <div class="form-group">
                                        <label for="admin_type">City Name</label>
                                        <input type="text" id="city" name ="city" class="form-control" required="required" placeholder="Enter Name" value="<?php echo $edit_data->city;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Status</label>
                                        <select class="form-control" value="<?php echo $edit_data->status;?>" name="status" id="status">
                                           <option value="1" <?php echo ($edit_data->status == 1)?'selected':''; ?> >Active</option>
                                            <option value="0" <?php echo ($edit_data->status == 0)?'selected':''; ?> >Inactive</option>
                                        </select>
                                    </div>

                                    
									 
                                </div>
                                 
                             </div>
                             
                             
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="hidden" name="id" value="<?php echo $edit_data->id; ?>"/>
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            
        </div>    
    </section>
</div>
 
<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>  
