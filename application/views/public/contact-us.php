<!-- <section class="">
   <div class="container-fluid website-design-contain contactus-contain-101">
      <div class="container-fluid   ">
         <div class="container">
            <div class="row  pt-3 pb-3  ">
               <div class="col-sm-6">
                  <div class="pt-5">
                     <h2 class="wordH text-center text-dark"></h2> </div>
               </div>
               <div class="col-sm-6 ecom-img-section text-center"> <img src="<?= base_url()?>assets/images/contact-us2.gif" alt="Contact Us" class="top-banner"> </div>
            </div>
         </div>
      </div>
   </div>
</section> -->
<section class="bg-seamless-contactus">
   <div class="container">
      <div class="row pt-5">
         <div class="col-sm-12">
            <h1 class="contact-text"><span class="contact-heading">Contact Us </span></h1>
            <p class="contact-text-main"> Thank you for using <b>Megatask Technologies Pvt Ltd,</b> Please complete the form below, so we can provide quick and efficient service.</p>
         </div>
      </div>
      <hr class="mb-4">
      <div class="row contact-info">
         <div class="col-sm-6">
            <div class="">                
                  <div>
                     <h4 class="contact-text"><img src="<?= base_url()?>assets/images/india.png"> Office (INDIA)</h4>
					 <address>
                     <ul class="list-unstyled">
                        <li class="contact-text"><strong>Address:</strong> D-21 (Second Floor) Lane No.3, <br>Abul Fazal Enclave-Part 1, Jamia Nagar,<br> New Delhi-110025, India.</li>
                         
                     </ul>
					 </address>
                  </div>
                  <hr>
                  <div>
                     <h4 class="contact-text"><img src="<?= base_url()?>assets/images/call.png" alt="Phone number Dubai" class="img-responsive"> Phone Number</h4>
                     <ul class="list-unstyled">
                        <li class="contact-text"></li>
                        <li class="contact-text"><a href="tel:01142032023" class="contact-text"><strong>Phone:</strong>  (IN) +91-114-203-2023</a></li>
                        <li class="contact-text"><a href="tel:919871652511" class="contact-text"><strong>Phone:</strong>  (IN) +91 9871652511</a></li>
                        <li class="contact-text"><a href="mailto:info@megatasktechnologies.com" class="contact-text"><strong>Email:</strong> info@megatasktechnologies.com</a></li>
                     </ul>
                  </div>
                  <hr>
                  <div>
                     <h4 class="contact-text">Follow Us</h4>
                     <div class="contact-social-icon">
                           <a href="https://www.youtube.com/channel/UCI-TtTxlPXLRRUBTcsFf4FQ" target="_blank" class="social_link"><i class="fa social_dot fa-youtube-play" aria-hidden="true"></i></a>&nbsp;&nbsp;
                           <a href="https://www.facebook.com/MegaTaskTechnology" target="_blank" class="social_link"><i class="fa social_dot fa-facebook-official" aria-hidden="true"></i></a>&nbsp;&nbsp; 
                           <a href="https://www.linkedin.com/company/megatasktechnologies" target="_blank" class="social_link"><i class="fa social_dot fa-linkedin" aria-hidden="true"></i></a>&nbsp;&nbsp; 
                           <a href="https://www.instagram.com/megatasktechnologies/" target="_blank" class="social_link"><i class="fa social_dot fa-instagram" aria-hidden="true"></i></a>&nbsp;&nbsp; 
						   <a href="https://twitter.com/megatasktech" target="_blank" class="social_link"><i class="fa social_dot fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;
                     </div>
                  </div>                
            </div>
         </div> 
         <div class="col-sm-6" >
            <div class="abc">
                
                  <div>
                     <h4 class="contact-text"><img src="<?= base_url()?>assets/images/united-arab-emirates.png" alt="Dubai flag" class="img-responsive"> Office (DUBAI)</h4>
					 <address>
                     <ul class="list-unstyled">
                        <li class="contact-text" style="padding-bottom: 25px;"><strong>Address:</strong> The exchange tower, Business Bay,<br>Dubai - United Arab Emirates.</li>                         
                     </ul>
					 </address>
                  </div>
                  <hr> 
                  <div>
                     <h4 class="contact-text"><img src="<?= base_url()?>assets/images/call.png" alt="Phone number Dubai" class="img-responsive"> Phone Number</h4>
                     <ul class="list-unstyled">
                        <li class="contact-text"></li>
                        <li class="contact-text"><a href="tel:+971545871570" class="contact-text"><strong>Phone:</strong> (UAE) (+971)-54-587-1570</a></li>
                        <li class="contact-text"><a href="mailto:info@megatasktechnologies.com" class="contact-text"><strong>Email:</strong> info@megatasktechnologies.com</a></li> 
                        <br><br><br><br>
                      </ul>
                  </div>
                   
               
                
            </div>
         </div>
         
      </div>
      <div class="row contact-info">
         <div class="col-sm-6 no-padding">
            <div class="ecom-img-section">
                     <div>
                        <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=D%2021,%202nd%20Floor,%20Thoker%20No%203,%20Shaheen%20Bagh,%20New%20Delhi%20Delhi+(Megatask%20Technologies%20Pvt%20Ltd-%20(Website%20Design%20&amp;%20Development%20Company))&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        
                     </div>
                  </div>
         </div>
         <div class="col-sm-6 no-padding">  
            <!-- <h4 class="contact-text">Write to us </h4> -->
            <?php

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
                        <form class="form-horizontal megatask-form" action="<?=base_url()?>Index/insert_contactus" method="post">
                           <div class="form-group">
                              <input type="text" class="form-control wow bounceInRight " id="contact_name" name="contact_name" placeholder="Full Name *" required="required" data-wow-delay=".20s" autocomplete="off" value="<?= set_value('contact_name') ?>">
                              <div class="contact-error">
                                 <?php

                        if(form_error('contact_name') !=='')

                        {

                           echo form_error('contact_name');

                        }

                        ?>
                              </div>
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control wow bounceInRight" id="contact_email" name="contact_email" placeholder="Email  *" data-wow-delay=".30s" autocomplete="off" value="<?= set_value('contact_email') ?>" required="required">
                              <div class="contact-error">
                                 <?php

                        if(form_error('contact_email') !=='')

                        {

                           echo form_error('contact_email') ;

                        }

                        ?>
                              </div>
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control wow bounceInRight allow-numeric" id="contact_mobile" name="contact_mobile" placeholder="Mobile *" maxlength="12" data-wow-delay=".40s" autocomplete="off" value="<?= set_value('contact_mobile') ?>" required="required">
                              <div class="contact-error">
                                 <?php

                        if(form_error('contact_mobile') !=='')

                        {

                           echo  form_error('contact_mobile') ;

                        }

                        ?>
                              </div>
                           </div>
                           <div class="form-group">
                              <textarea class="wow bounceInRight" id="contact_message" name="contact_message" placeholder="Message *" rows="4" style="height: 150px;" data-wow-delay=".50s" autocomplete="off" required="required">
                                 <?= set_value('contact_message') ?>
                              </textarea>
                              <div class="contact-error">
                                 <?php

                        if(form_error('contact_message') !=='')

                        {

                           echo "<p class='contact-text'>".form_error('contact_message')."</p>" ;

                        }

                        ?>
                              </div>
                           </div>
                           <div class="form-group sent-button">
                              <input type="submit" class="btn btn-danger get_quote mb-3 wow bounceInRight " id="action" name="action" value="Send Message" data-wow-delay=".60s">
                              <!-- <input type="reset" class="mb-3 btn btn-primary get_quote wow bounceInRight" value="Reset" data-wow-delay=".65s"> </div> -->
                        </form>
         
         </div>
      </div>
   </div>
</section>


<script>
// Add active class to the current button (highlight it)
$('.listitem').click(function(e) {
   e.preventDefault();
   $('.listitem').removeClass('active');
   $(this).addClass('active');
});
 
</script>