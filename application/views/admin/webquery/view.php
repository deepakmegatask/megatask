<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         <a href="<?php echo base_url();?>admin/members"> <i class="fa fa-users" aria-hidden="true"></i> Member</a>
         <small>Edit</small>
      </h1>
   </section>
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
               <div class="box-header">
               </div>
               <div class="box-body">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="address">Platform your website build on?</label>
                           <div class="temp">
                              <?php
                                 if (!empty($edit_data->which_platform_is_your_website_built_on)) {
                                     echo $edit_data->which_platform_is_your_website_built_on;
                                 }
                                 elseif (!empty($edit_data->which_platform_is_your_website_built_on_other)) {
                                     echo $edit_data->which_platform_is_your_website_built_on_other;
                                 }
                                 
                                 
                                 
                                 ?>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="address">What are your website need?</label>
                           <br>
                           <div class="temp">                                    
                              <?php 
                                 if(!empty($edit_data->what_are_your_website_need)){
                                 
                                     
                                     $decode_website_other = json_decode($edit_data->what_are_your_website_need);
                                 
                                   foreach ($decode_website_other as $key => $value) {
                                 
                                     if ($value != 'Other' ) {
                                        
                                         echo  $value.'<br>';
                                     }
                                       
                                    
                                 
                                   }
                                 
                                 }
                                 
                                  if(!empty($edit_data->what_are_your_website_need_other))
                                  {
                                     
                                     echo  $edit_data->what_are_your_website_need_other.'<br>';
                                 }
                                 
                                 ?>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="address">What type of business is for?</label>
                           <div class="temp">
                              <?php
                                 if (!empty($edit_data->what_type_of_business_is_for)) {
                                     
                                     echo  $edit_data->what_type_of_business_is_for.'<br>';
                                 
                                 }
                                 
                                 elseif (!empty($edit_data->what_type_of_business_is_for_other)) {
                                     
                                     echo  $edit_data->what_type_of_business_is_for_other.'<br>';
                                 
                                 }
                                 
                                 
                                 
                                 
                                 
                                 ?>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="address">Client Email</label>
                           <input type="text" id="address" name ="address" class="form-control" placeholder="No Data" value="<?php echo $edit_data->email?>" disabled>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="address">What industry do you operate?</label>
                           <div class="temp">
                              <?php
                                 if (!empty($edit_data->what_industry_do_you_operate)) {
                                     echo $edit_data->what_industry_do_you_operate;
                                 }
                                 elseif (!empty($edit_data->what_industry_do_you_operate_other)) {
                                     echo $edit_data->what_industry_do_you_operate_other;
                                 }
                                 
                                 
                                 
                                 ?>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="address">When you like website go live?</label>
                           <div class="temp">
                              <?php
                                 if (!empty($edit_data->when_you_like_website_go_live)) {
                                     echo $edit_data->when_you_like_website_go_live;
                                 }
                                 elseif (!empty($edit_data->when_you_like_website_go_live_other)) {
                                     echo $edit_data->when_you_like_website_go_live_other;
                                 }
                                 
                                 
                                 
                                 ?>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="address">What is your estimate budget for this project?</label>
                           <div class="temp">
                              <?php
                                 if (!empty($edit_data->what_is_your_estimate_budget_for_this_project)) {
                                     echo $edit_data->what_is_your_estimate_budget_for_this_project;
                                 }
                                 elseif (!empty($edit_data->what_is_your_estimate_budget_for_this_project_other)) {
                                     echo $edit_data->what_is_your_estimate_budget_for_this_project_other;
                                 }
                                 
                                 
                                 
                                 ?>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="address">How to make hiring decision?</label>
                           <div class="temp">
                              <?php
                                 if (!empty($edit_data->how_to_make_hiring_decision)) {
                                     echo $edit_data->how_to_make_hiring_decision;
                                 }
                                 elseif (!empty($edit_data->how_to_make_hiring_decision_other)) {
                                     echo $edit_data->how_to_make_hiring_decision_other;
                                 }
                                 
                                 
                                 
                                 ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="address">Client Phone Number</label>
                           <input type="text" id="address" name ="address" class="form-control" placeholder="No Data" value="<?php echo $edit_data->mobile?>" disabled>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.box-body -->
               <div class="box-footer">
                  <input type="hidden" name="id" value="<?php echo $edit_data->id; ?>"/>
                  <a href="<?php echo base_url()?>admin/webquery"><input type="button" class="btn btn-default" value="Back" /></a>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>