<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css"> 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <a href="<?php echo base_url();?>admin/cities"> <i class="fa fa-users" aria-hidden="true"></i> City</a>
        <small>Add New City</small>
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
                        <h3 class="box-title">Add New Admin Member</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="member_form" action="<?php echo base_url() ?>admin/cities/insertnow" method="post" role="form" enctype="multipart/form-data">
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
                                                            <option value="<?php echo $value->id;?>"><?php echo $value->name;?>-  <?php echo $value->countryCode;?></option>
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
                                                         <option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>
                                                         <?php

                                                     }
                                                }
                                             ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="admin_type">City Name <span class="text-danger">*</span></label>
                                        <input type="text" id="city" name ="city" class="form-control" required="required" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="1">Active</option>
                                            <option value="0">InActive</option>
                                            
                                        </select>
                                    </div>

                                    
                                     
                                </div>
                                 
                             </div>
                             
                             
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
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
<script>
    $(document).ready(function(){
        $("#country_id").change(function(){
           var country_id = document.getElementById('country_id').value;
          getStateList(country_id);
        });

        $("#video_file").change(function(){
           var id = "video_file";
            var max_size = 400000000;
            video_validation(id,max_size);
        });

    });
    
  </script>
  <script>
    getStateList();
    // Function Video Validation
    function getStateList(countryid='')
    {
         var hitURL = "<?php echo base_url() ?>admin/state/getStateLists";
           
            jQuery.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { countryid : countryid } 
            }).done(function(data){ 
                var options = "";
                options +='<option value="">Select</option>';
                if(data.length >0)
                {
                    for (var i = 0; i < data.length; i++)
                    {
                         options +='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }    
                }
                document.getElementById('state_id').innerHTML = options;        
                
            });
           
    }
    function video_validation(id,max_size)
    {
        var fuData = document.getElementById(id);
        var FileUploadPath = fuData.value;
        

        if (FileUploadPath == ''){
            alert("Please upload Video");
        } 
        else {
            var Extension = FileUploadPath.substring(FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
            if (Extension == "mp4" || Extension == "mov" || Extension == "flv"|| Extension == "avi"|| Extension == "3gp") {

                    if (fuData.files && fuData.files[0]) {
                        var size = fuData.files[0].size;
                        
                        if(size > max_size){   //1000000 = 1 mb
                            alert("Maximum file size 50 MB");
                            $("#"+id).val('');
                            return;
                        }
                    }

            } 
            else 
            {
                alert("Video only allows file types of mp4, mov, flv, avi, 3gp , 3gpp");
                $("#"+id).val('');
            }
        }   
    }   

  </script>
