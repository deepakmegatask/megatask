<style>
input[type=email]{
        text-transform: lowercase;
    } 
</style>
<div class=" modal fade modal  bd-example-modal-lg" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header white-bottom-border">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <span class="header-title"><img src="assets/img/logo.png" class="img-fluid modal-logo">&nbsp;Megatask Technologies Pvt Ltd</span>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form method="post" id="web_query" name="web_query"  enctype="multipart/form-data"  action="<?=base_url()?>index_page/save_query">
            <div id="myModal0" class="show">
               <div class="modal-body text-center">
                  <div class="content-body-text">
                     <h3>What is your web design requirement?</h3>
                     <p>Once selected, please click 'continue'</p>
                     <div class="success_div"></div>
                     <div class="error_div"></div>
                  </div>
                  <div class="input-body-content" style="display: inline-flex;">
                     <input type="radio" name="query_type" id="manage-website-1" value="1" class="input-hidden"  />
                     <label for="manage-website-1" style="padding: 5px;"><img src="assets/img/radio/radio-1.jpg" id="create-web" alt="manage-website"/></label>
                     <input type="radio" name="query_type" id="manage-website-2" value="2" class="input-hidden"  />
                     <label for="manage-website-2" style="padding: 5px;"><img src="assets/img/radio/radio-2.jpg" id="manage-website" alt="manage-website"/></label>
                  </div>
               </div>
               <div class="modal-footer white-top-border">
                  <button type="button" class="btn btn-continue show choose-requirement" >Continue</button>
                  <button type="button" class="btn btn-continue hide choose-requirement" >Continue</button>
               </div>
            </div>

            <div id="what-are-your-website-needs" class="hide">
               <div class="modal-body text-center">
                  <div class="content-body-text">
                     <h3>What are your website needs?</h3>
                      <div class="success_div"></div>
                     <div class="error_div"></div>
                  </div>
                  <div class="input-body-content" >
                     <div class="check-input">
                        <input type="checkbox" class="radio-color-btn radio-btn-style website-need-option" id="to-advertise-my-business-services" name="what_your_website_need[]" value="To Advertise My Business/Services">
                        <label for="to-advertise-my-business-services" >To Advertise My Business/Services</label>
                     </div>
                     <div class="check-input">
                        <input type="checkbox" class="radio-color-btn radio-btn-style website-need-option" id="to-sell-products-services-eg-e-commerce" name="what_your_website_need[]" value="To Sell Products/Services E.g. E-commerce">
                        <label for="to-sell-products-services-eg-e-commerce" >To Sell Products/Services E.g. E-commerce</label>
                     </div>
                     <div class="check-input">
                        <input type="checkbox" class="radio-color-btn radio-btn-style website-need-option" id="what-are-your-website-needs-other" name="what_your_website_need[]" value="Other">
                        <label for="what-are-your-website-needs-other">
                        <input   type="text" class="form-control" name="what_your_website_need_other" placeholder="Other">
                        </label>
                     </div>
                  </div>
               </div>
               <div class="modal-footer white-top-border">
                  <button type="button" class="btn btn-continue" id="back-modal1">Back</button>
                  <button type="button" class="btn btn-continue your-website-needs choose-website-need" id="btn-continue1">Continue</button>
               </div>
            </div>
            <div id="myModal3" class="hide">
               <div class="modal-body text-center">
                  <div class="content-body-text">
                     <h3>What Type of Business Is This For?</h3>
                      <div class="success_div"></div>
                     <div class="error_div"></div>
                  </div>
                  <div class="input-body-content">
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn type_of_business radio-btn-style" id="type-of-business-personal-project" name="what_type_of_business_is_for" value="Personal project">
                        <label for="type-of-business-personal-project">Personal project</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn type_of_business radio-btn-style" id="type-of-business-self-employed" name="what_type_of_business_is_for" value="Sole trader/self-employed">
                        <label for="type-of-business-self-employed">Sole trader/self-employed</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn type_of_business radio-btn-style" id="type-of-business-small-business" name="what_type_of_business_is_for" value="Small business (1 - 9 employees)">
                        <label for="type-of-business-small-business">Small business (1 - 9 employees)</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn type_of_business radio-btn-style" id="type-of-business-medium-business" name="what_type_of_business_is_for" value="Medium business (10 - 29 employees)">
                        <label for="type-of-business-medium-business">Medium business (10 - 29 employees)</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn type_of_business radio-btn-style" id="type-of-business-large-business" name="what_type_of_business_is_for" value="Large business (30 - 99 employees)">
                        <label for="type-of-business-large-business">Large business (30 - 99 employees)</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn type_of_business radio-btn-style" id="type-of-business-extra-large-business" name="what_type_of_business_is_for" value="Extra large business (100 or more employees)">
                        <label for="type-of-business-extra-large-business">Extra large business (100 or more employees)</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn type_of_business radio-btn-style" id="type-of-business-charity"  name="what_type_of_business_is_for" value="Charity/non-profit">
                        <label for="type-of-business-charity">Charity/non-profit</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn type_of_business radio-btn-style" id="type-of-business-other" name="what_type_of_business_is_for" value="Other">
                        <label for="type-of-business-other">
                        <input type="text" class="form-control" name="what_type_of_business_is_for_other" value="">
                        </label>
                     </div>
                  </div>
               </div>
               <div class="modal-footer white-top-border">
                  <button type="button" class="btn btn-continue show" id="back-modal2">Back</button>
                  <button type="button" class="btn btn-continue hide" id="back-modal22">Back</button>
                  <button type="button" class="btn btn-continue choose-type-of-business" id="btn-continue2">Continue</button>
               </div>
            </div>
            <div id="myModal4" class="hide">
               <div class="modal-body text-center">
                  <div class="content-body-text">
                     <h3>What industry do you operate in?</h3>
                     <div class="success_div"></div>
                     <div class="error_div"></div>
                  </div>
                  <div class="input-body-content">
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style what-industry-do-you-operate"  name="what_industry_do_you_operate" id="what-industry-business-services" value="Business services">
                        <label for="what-industry-business-services">Business services</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style what-industry-do-you-operate"  name="what_industry_do_you_operate" id="what-industry-creative-industry" value="Creative industries">
                        <label for="what-industry-creative-industry">Creative industries</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style what-industry-do-you-operate"  name="what_industry_do_you_operate" id="what-industry-entertainment-events" value="Entertainment & events">
                        <label for="what-industry-entertainment-events">Entertainment & events</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style what-industry-do-you-operate"  name="what_industry_do_you_operate" id="what-industry-financial-services" value="Financial services">
                        <label for="what-industry-financial-services">Financial services</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style what-industry-do-you-operate"  name="what_industry_do_you_operate" id="what-industry-health-fitness" value="Health & fitness">
                        <label for="what-industry-health-fitness">Health & fitness</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style what-industry-do-you-operate"  name="what_industry_do_you_operate" id="what-industry-home-services" value="Home services">
                        <label for="what-industry-home-services">Home services</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style what-industry-do-you-operate"  name="what_industry_do_you_operate" id="what-industry-restaurant-food" value="Restaurant/food">
                        <label for="what-industry-restaurant-food">Restaurant/food</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style what-industry-do-you-operate"  name="what_industry_do_you_operate" id="what-industry-retail-consumer-goods" value="Retail/consumer goods">
                        <label for="what-industry-retail-consumer-goods">Retail/consumer goods</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style what-industry-do-you-operate"  name="what_industry_do_you_operate" id="what-industry-technology-software" value="Technology/software">
                        <label for="what-industry-technology-software">Technology/software</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style what-industry-do-you-operate" id="what-industry-other-industry" name="what_industry_do_you_operate" value="Other">
                        <label for="what-industry-other-industry">
                        <input type="text" class="form-control" name="what_industry_do_you_operate_other">
                        </label>
                     </div>
                  </div>
               </div>
               <div class="modal-footer white-top-border">
                  <button type="button" class="btn btn-continue" id="back-modal3">Back</button>
                  <button type="button" class="btn btn-continue choose-what-industry-do-you" id="btn-continue3">Continue</button>
               </div>
            </div>
            <div id="myModal5" class="hide">
               <div class="modal-body text-center">
                  <div class="content-body-text">
                     <h3>When would you like the website to go live/be updated?</h3>
                     <div class="success_div"></div>
                     <div class="error_div"></div>
                  </div>
                  <div class="input-body-content">
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style when-you-like-website-go-live"  id="website-to-go-live-asap" name="when_you_like_website_go_live" value="ASAP">
                        <label for="website-to-go-live-asap">ASAP</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style when-you-like-website-go-live"  id="website-to-go-live-in-within-a-week" name="when_you_like_website_go_live" value="Within A Few Weeks">
                        <label for="website-to-go-live-in-within-a-week">Within A Few Weeks</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style when-you-like-website-go-live"  id="website-to-go-live-in-within-month" name="when_you_like_website_go_live" value="Within A Month">
                        <label for="website-to-go-live-in-within-month">Within A Month</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style when-you-like-website-go-live"  id="website-to-go-live-in-within-few-month" name="when_you_like_website_go_live" value="Within a few months">
                        <label for="website-to-go-live-in-within-few-month">Within a few months</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style when-you-like-website-go-live" id="website-to-go-live-discuss-with-professional" name="when_you_like_website_go_live"  value="I would like to discuss this with the professional">
                        <label for="website-to-go-live-discuss-with-professional">I would like to discuss this with the professional</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style when-you-like-website-go-live" id="website-to-go-live-other"  name="when_you_like_website_go_live" value="Other">
                        <label for="website-to-go-live-time">
                        <input type="text" class="form-control" name="when_you_like_website_go_live_other" />
                        </label>
                     </div>
                  </div>
               </div>
               <div class="modal-footer white-top-border">
                  <button type="button" class="btn btn-continue" id="back-modal4">Back</button>
                  <button type="button" class="btn btn-continue choose-website-to-go-live" id="btn-continue4">Continue</button>
               </div>
            </div>
            <div id="myModal6" class="hide">
               <div class="modal-body text-center">
                  <div class="content-body-text">
                     <h3>What is your estimated budget for this project?</h3>
                      <div class="success_div"></div>
                     <div class="error_div"></div>

                  </div>
                  <div class="input-body-content">
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style estimate-budget-for-project estimate-budget-for-project" id="budget-for-this-project-less-than-250" name="what_is_your_estimate_budget_for_this_project" value="Less than 250">
                        <label for="manage-web-less-250">Less than £250</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style estimate-budget-for-project" id="budget-for-this-project-250-999" name="what_is_your_estimate_budget_for_this_project" value="250 - 999">
                        <label for="budget-for-this-project-250-999">£250 - £999</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style estimate-budget-for-project" id="budget-for-this-project-1000-1999" name="what_is_your_estimate_budget_for_this_project" value="1,000 - 1,999">
                        <label for="budget-for-this-project-1000-1999">£1,000 - £1,999</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style estimate-budget-for-project" id="budget-for-this-project-2000-2999" name="what_is_your_estimate_budget_for_this_project" value="2,000 - 2,999">
                        <label for="budget-for-this-project-2000-2999">£2,000 - £2,999</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style estimate-budget-for-project" id="budget-for-this-project-3000-4999" name="what_is_your_estimate_budget_for_this_project" value="3,000 - 4,999">
                        <label for="budget-for-this-project-3000-4999">£3,000 - £4,999</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style estimate-budget-for-project" id="budget-for-this-project-5000-more" name="what_is_your_estimate_budget_for_this_project" value="5,000 or more">
                        <label for="budget-for-this-project-5000-more">£5,000 or more</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style estimate-budget-for-project" id="budget-for-this-project-other" name="what_is_your_estimate_budget_for_this_project" value="Other">
                        <label for="budget-for-this-project-other">
                        <input type="text" class="form-control" name="what_is_your_estimate_budget_for_this_project_other">
                        </label>
                     </div>
                  </div>
               </div>
               <div class="modal-footer white-top-border">
                  <button type="button" class="btn btn-continue" id="back-modal5">Back</button>
                  <button type="button" class="btn btn-continue choose-estimate-budget" id="btn-continue5">Continue</button>
               </div>
            </div>
            <div id="myModal7" class="hide">
               <div class="modal-body text-center">
                  <div class="content-body-text">
                     <h3>How likely are you to make a hiring decision?</h3>
                      <div class="success_div"></div>
                     <div class="error_div"></div>

                  </div>
                  <div class="input-body-content">
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style make-hiring-decision"  name="how_to_make_hiring_decision" id="make-hiring-decision-hire-now" value="I'm ready to hire now">
                        <label for="make-hiring-decision-hire-now">I'm ready to hire now</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style make-hiring-decision"  name="how_to_make_hiring_decision" id="make-hiring-decision-hire-someone" value="I'm definitely going to hire someone">
                        <label for="make-hiring-decision-hire-someone">I'm definitely going to hire someone</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style make-hiring-decision"  name="how_to_make_hiring_decision" id="make-hiring-decision-likely-hire-someone" value="I'm likely to hire someone">
                        <label for="make-hiring-decision-likely-hire-someone">I'm likely to hire someone</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style make-hiring-decision"  name="how_to_make_hiring_decision" id="make-hiring-decision-possibly-hire-someone" value="I will possibly hire someone">
                        <label for="make-hiring-decision-possibly-hire-someone">I will possibly hire someone</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style make-hiring-decision"  name="how_to_make_hiring_decision" id="make-hiring-decision-planning-research" value="I'm planning and researching">
                        <label for="make-hiring-decision-planning-research">I'm planning and researching</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style make-hiring-decision"  id="make-hiring-decision-other" name="how_to_make_hiring_decision" value="Other">
                        <label for="manage-web-hire">
                        <input type="text" class="form-control" name="how_to_make_hiring_decision_other">
                        </label>
                     </div>
                  </div>
               </div>
               <div class="modal-footer white-top-border">
                  <button type="button" class="btn btn-continue" id="back-modal6">Back</button>
                  <button type="button" class="btn btn-continue choose-hireing-decision" id="btn-continue6">Continue</button>
               </div>
            </div>
            <div id="myModal9" class="hide">
               <div class="modal-body text-center">
                  <div class="content-body-text">
                     <h3>What email address would you like quotes sent to?</h3>

                      <div class="success_div"></div>
                     <div class="error_div"></div>
                  </div>
                  <div class="input-body-content">
                     <div>
                        <input type="email" onkeyup="this.value=removeSpaces(this.value);" name="email_for_quote" id="email-for-quote" class="form-control" placeholder="Enter your email address">
                     </div>
                  </div>
               </div>
               <div class="modal-footer white-top-border">
                  <button type="button" class="btn btn-continue" id="back-modal8">Back</button>
                  <button type="button" class="btn btn-continue choose-email-address" id="btn-continue8">Continue</button>
               </div>
            </div>
            <div id="myModal10" class="hide">
               <div class="modal-body text-center">
                  <div class="content-body-text">
                     <h3>What is your phone number?</h3>
                      <div class="success_div"></div>
                     <div class="error_div"></div>
                  </div>
                  <div class="input-body-content">
                     <div>
                        <input onkeyup="this.value=removeSpaces(this.value);" type="number" name="mobile_for_quote" class="form-control" placeholder="Enter your phone number">
                     </div>
                     <div class="content-body-text">
                        <p>Professionals will only be given your details once they've sent you a quote.</p>
                     </div>
                  </div>
               </div>
               <div class="modal-footer white-top-border">
                  <button type="button" class="btn btn-continue" id="back-modal9">Back</button>
                  <button type="submit" name="submit"  class="btn btn-continue" >Submit</button>
               </div>
            </div>
            <div id="myModal11" class="hide">
               <div class="modal-body text-center">
                  <div class="input-body-content">
                     <img src="assets/img/success.gif" class="img-fluid">
                  </div>
                  <div class="content-body-text">
                     <h3>Great - we've got pros ready and available.</h3>
                  </div>
               </div>
               <div class="modal-footer white-top-border">
                   
               </div>
            </div>
            <!--SEcond Section Form Started-->
            <div id="myModal12" class="hide">
               <div class="modal-body text-center">
                  <div class="content-body-text">
                     <h3>Which platform is your website built on?</h3>
                     <div class="success_div"></div>
                     <div class="error_div"></div>
                  </div>
                  <div class="input-body-content">
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style choose-which-platform" id="which-plateform-not-sure"  name="which_platform_is_your_website_built_on" value="I'm not sure">
                        <label for="which-plateform-not-sure">I'm not sure</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style choose-which-platform" id="which-plateform-custom-built" name="which_platform_is_your_website_built_on" value="Custom built">
                        <label for="which-plateform-custom-built">Custom built</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style choose-which-platform" id="which-plateform-joomla" name="which_platform_is_your_website_built_on" value="Joomla">
                        <label for="which-plateform-joomla">Joomla</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style choose-which-platform" id="which-plateform-shopify" name="which_platform_is_your_website_built_on" value="Shopify">
                        <label for="which-plateform-shopify">Shopify</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style choose-which-platform" id="which-plateform-square-space" name="which_platform_is_your_website_built_on" value="SquareSpace">
                        <label for="which-plateform-square-space">SquareSpace</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style choose-which-platform" id="which-plateform-wix" name="which_platform_is_your_website_built_on" value="Wix">
                        <label for="which-plateform-wix">Wix</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style choose-which-platform" id="which-plateform-wordpress" name="which_platform_is_your_website_built_on" value="Wordpress">
                        <label for="which-plateform-wordpress">Wordpress</label>
                     </div>
                     <div class="check-input">
                        <input type="radio" class="radio-color-btn radio-btn-style choose-which-platform" id="which-plateform-other" name="which_platform_is_your_website_built_on" value="Other">
                        <label for="which-plateform-other">
                        <input type="text" class="form-control" name="which_platform_is_your_website_built_on_other">
                        </label>
                     </div>
                  </div>
               </div>
               <div class="modal-footer white-top-border">
                  <button type="button" class="btn btn-continue" id="back-modal10">Back</button>
                  <button type="button" class="btn btn-continue choose-which-platform" id="btn-continue10">Continue</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
</div>
</section>
<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script> 
<script>

   function removeSpaces(string)
       {
            return string.split(' ').join('');
        }

   function flush_msg()
   {
      $(".error_div").html('');
      $(".success_div").html('');
   }

   function ValidateEmail(inputText)
   {
   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if(inputText.match(mailformat))
   {
    
    
   return true;
   }
   else
   {
    
   return false;
   }
   }


   function flash_error_message(mess)
   {
      flush_msg();
      if(mess.length >0)
      {
   
         var alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>';
         alert +=mess;
         alert +='</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
         $(".error_div").html(alert);
         return false;
   
      }
   }  

    function flash_success_message(mess)
   {
      flush_msg();
      if(mess.length >0)
      {
   
         var alert = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>';
         alert +=mess;
         alert +='</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
         $(".error_div").html(alert);
         return false;
   
      }
   }
   
   
     
   

   // start checking for select Web Design Requirement
    $(".choose-requirement").on("click", function(){
       
      if($("input:radio[name='query_type']").is(":checked")) 
      {
          flush_msg();
          var choose_requirement = $("input:radio[name='query_type']:checked").val();
          if(choose_requirement ==1)
          {
             $('#myModal0').hide();  
             $('#what-are-your-website-needs').show();  
          }else if(choose_requirement ==2)
          {
            $('#myModal0').hide();  
            $('#myModal12').show();  
          }

      }else
      {
          
         flash_error_message('Web Design Requirement');
         return false;
         
      }
   }); 

    // end checking for select Web Design Requirement




// start checking for select website needs?
    $(".choose-website-need").on("click", function(){

      var boxes = $('.website-need-option:checked');
      if (boxes.length >0) 
      {
         flush_msg();
          

           
           if($("#what-are-your-website-needs-other").is(":checked"))
           {
             var otherval = $("input[name='what_your_website_need_other']").val();
             if(otherval.length == 0)
             {

               flash_error_message('What are your website needs? Others ');
               $("input[name='what_your_website_need_other']").focus(); 
               return false;
             }
            
           }

            $('#what-are-your-website-needs').hide(); 
            $('#myModal3').show();


      }else
      {
          
         flash_error_message('Select What are your website needs?');
         return false;
         
      }
   }); 


// end checking for select website needs?

// start checking for Type Of Bisiness?
    $(".choose-type-of-business").on("click", function(){

      var boxes = $('.type_of_business:checked');
      if (boxes.length >0) 
      {
         flush_msg();
          

           
           if($('.type_of_business:checked').val() == 'Other')
           {

             var otherval = $("input[name='what_type_of_business_is_for_other']").val();
             if(otherval.length == 0)
             {

               flash_error_message('What type of business is this for? Others ');
               $("input[name='what_type_of_business_is_for_other']").focus(); 
               return false;
             }

           
            }

            $('#myModal3').hide();
            $('#myModal4').show();  


      }else
      {
          
         flash_error_message('Select What type of business is this for ?');
         return false;
         
      }
   }); 


// end checking for Type Of Bisiness?

// start checking What industry do you operate in?

    $(".choose-what-industry-do-you").on("click", function(){

      var boxes = $('.what-industry-do-you-operate:checked');

          
      if (boxes.length >0) 
      {
         flush_msg();
          if($('.what-industry-do-you-operate:checked').val() == 'Other')
           {

             var otherval = $("input[name='what_industry_do_you_operate_other']").val();
             if(otherval.length == 0)
             {

                flash_error_message('What industry do you operate in? Others ');
               $("input[name='what_industry_do_you_operate_other']").focus(); 
               return false;
             }



           
            }

           $('#myModal4').hide(); 
            $('#myModal5').show();  


      }else
      {
          
         flash_error_message('Select What industry do you operate in?');
         return false;
         
      }
   }); 


// end checking What industry do you operate in?

// start checking website to go live

    $(".choose-website-to-go-live").on("click", function(){

      var boxes = $('.when-you-like-website-go-live:checked');

            
      if (boxes.length >0) 
      {
         flush_msg();
          if($('.when-you-like-website-go-live:checked').val() == 'Other')
           {

             var otherval = $("input[name='when_you_like_website_go_live_other']").val();
             if(otherval.length == 0)
             {

                flash_error_message('When would you like the website to go live? Others ');
               $("input[name='when_you_like_website_go_live_other']").focus(); 
               return false;
             }



           
            }

            $('#myModal6').show(); 
            $('#myModal5').hide(); 


      }else
      {
          
         flash_error_message('When would you like the website to go live?');
         return false;
         
      }
   }); 


// end checking website to go live

// start checking estimate budget for this project

    $(".choose-estimate-budget").on("click", function(){

      var boxes = $('.estimate-budget-for-project:checked');

            
      if (boxes.length >0) 
      {
         flush_msg();
          if(boxes.val() == 'Other')
           {

             var otherval = $("input[name='what_is_your_estimate_budget_for_this_project_other']").val();
             if(otherval.length == 0)
             {

                flash_error_message('What is your estimated budget for this project? Others ');
               $("input[name='what_is_your_estimate_budget_for_this_project_other']").focus(); 
               return false;
             }



           
            }

            $('#myModal6').hide();  
            $('#myModal7').show();  


      }else
      {
          
         flash_error_message('What is your estimated budget for this project?');
         return false;
         
      }
   }); 


// end checking estimate budget for this project

// start checking make hiring decision

    $(".choose-hireing-decision").on("click", function(){

      var boxes = $('.make-hiring-decision:checked');

            
      if (boxes.length >0) 
      {
         flush_msg();
          if(boxes.val() == 'Other')
           {

             var otherval = $("input[name='how_to_make_hiring_decision_other']").val();
             if(otherval.length == 0)
             {

                flash_error_message('How likely are you to make a hiring decision? Others ');
               $("input[name='how_to_make_hiring_decision_other']").focus(); 
               return false;
             }



           
            }

            $('#myModal7').hide();  
            $('#myModal9').show();  


      }else
      {
          
         flash_error_message('How likely are you to make a hiring decision?');
         return false;
         
      }
   }); 


// end checking estimate budget for this project


// start checking choose which plateform 

    $(".choose-which-platform").on("click", function(){

      var boxes = $('.choose-which-platform:checked');

            
      if (boxes.length >0) 
      {
         flush_msg();
          if(boxes.val() == 'Other')
           {

             var otherval = $("input[name='which_platform_is_your_website_built_on_other']").val();
             if(otherval.length == 0)
             {

                flash_error_message('Which platform is your website built on?? Others ');
               $("input[name='which_platform_is_your_website_built_on_other']").focus(); 
               return false;
             }



           
            }

               $('#myModal12').hide();  
               $('#myModal3').show();  


      }else
      {
          
         flash_error_message('Which platform is your website built on?');
         return false;
         
      }
   }); 


// end   checking choose which plateform 
 
// start checking make hiring decision

    $(".choose-email-address").on("click", function(){

      var boxes = $('#email-for-quote').val();

            
      if (boxes.length >0) 
      {
         flush_msg();
           
             if( !ValidateEmail(boxes) )
             {

                flash_error_message('Add Valid Email address would you like quotes sent to ');
               $("#email-for-quote").focus(); 
               return false;
             }



            
            $('#myModal10').show();  
         $('#myModal9').hide();   


      }else
      {
          
         flash_error_message('Add Email address would you like quotes sent to  ?');
         return false;
         
      }
   }); 


// end checking estimate budget for this project

$("input[name='what_your_website_need_other']").on("click",function(){
   $("#what-are-your-website-needs-other").prop( "checked", true );
});

$("input[name='what_type_of_business_is_for_other']").on("click",function(){
      $("#type-of-business-other").prop( "checked", true );
});


$("input[name='what_industry_do_you_operate_other']").on("click",function(){
      $("#what-industry-other-industry").prop( "checked", true );
});

$("input[name='when_you_like_website_go_live_other']").on("click",function(){
      $("#website-to-go-live-other").prop( "checked", true );
});
$("input[name='what_is_your_estimate_budget_for_this_project_other']").on("click",function(){
      $("#budget-for-this-project-other").prop( "checked", true );
});

$("input[name='how_to_make_hiring_decision_other']").on("click",function(){
      $("#make-hiring-decision-other").prop( "checked", true );
});

$("input[name='which_platform_is_your_website_built_on_other']").on("click",function(){
      $("#which-plateform-other").prop( "checked", true );
});
        
  
   
   
   //set button id on click to hide first modal
   $("#btn-continue").on( "click", function() {
         $('#myModal0').hide();  
         $('#what-are-your-website-needs').show();  
   }); 
   //trigger next modal
   
   
   //set button id on click to hide first modal
   $("#back-modal1").on( "click", function() {
         $('#what-are-your-website-needs').hide();  
   });
   //trigger next modal
   $("#back-modal1").on( "click", function() {
         $('#myModal0').show();  
   });
   
 /*  //set button id on click to hide first modal
   $("#btn-continue1").on( "click", function() {
         $('#what-are-your-website-needs').hide();  
   });
   //trigger next modal
   $("#btn-continue1").on( "click", function() {
         $('#myModal3').show();  
   });*/
   
   //set button id on click to hide first modal
   $("#back-modal2").on( "click", function() {
         $('#myModal3').hide();  
   });
   //trigger next modal
   $("#back-modal2").on( "click", function() {
         $('#what-are-your-website-needs').show();  
   });
   
   /*//set button id on click to hide first modal
   $("#btn-continue2").on( "click", function() {
         $('#myModal3').hide();  
   });
   //trigger next modal
   $("#btn-continue2").on( "click", function() {
         $('#myModal4').show();  
   });
   */
   //set button id on click to hide first modal
   $("#back-modal3").on( "click", function() {
         $('#myModal4').hide();  
   });
   //trigger next modal
   $("#back-modal3").on( "click", function() {
         $('#myModal3').show();  
   });
   
   //set button id on click to hide first modal
  /* $("#btn-continue3").on( "click", function() {
         $('#myModal4').hide();  
   });
   //trigger next modal
   $("#btn-continue3").on( "click", function() {
         $('#myModal5').show();  
   });*/
   
   //set button id on click to hide first modal
   $("#back-modal4").on( "click", function() {
         $('#myModal5').hide();  
   });
   //trigger next modal
   $("#back-modal4").on( "click", function() {
         $('#myModal4').show();  
   });
   
 /*  //set button id on click to hide first modal
   $("#btn-continue4").on( "click", function() {
         $('#myModal5').hide();  
   });
   //trigger next modal
   $("#btn-continue4").on( "click", function() {
         $('#myModal6').show();  
   });*/
   
   //set button id on click to hide first modal
   $("#back-modal5").on( "click", function() {
         $('#myModal6').hide();  
   });
   //trigger next modal
   $("#back-modal5").on( "click", function() {
         $('#myModal5').show();  
   });
   
   /*//set button id on click to hide first modal
   $("#btn-continue5").on( "click", function() {
         $('#myModal6').hide();  
   });
   //trigger next modal
   $("#btn-continue5").on( "click", function() {
         $('#myModal7').show();  
   });*/
   
   //set button id on click to hide first modal
   $("#back-modal6").on( "click", function() {
         $('#myModal7').hide();  
   });
   //trigger next modal
   $("#back-modal6").on( "click", function() {
         $('#myModal6').show();  
   });
   
 /*  //set button id on click to hide first modal
   $("#btn-continue6").on( "click", function() {
         $('#myModal7').hide();  
   });
   //trigger next modal
   $("#btn-continue6").on( "click", function() {
         $('#myModal9').show();  
   });*/
   
   //set button id on click to hide first modal
   $("#back-modal8").on( "click", function() {
         $('#myModal9').hide();  
   });
   //trigger next modal
   $("#back-modal8").on( "click", function() {
         $('#myModal7').show();  
   });
   
  /* //set button id on click to hide first modal
   $("#btn-continue7").on( "click", function() {
         $('#myModal8').hide();  
   });
   //trigger next modal
   $("#btn-continue7").on( "click", function() {
         $('#myModal9').show();  
   });*/
   
   //set button id on click to hide first modal
   $("#back-modal8").on( "click", function() {
         $('#myModal9').hide();  
   });
   //trigger next modal
   $("#back-modal8").on( "click", function() {
         $('#myModal8').show();  
   });
   
   /*//set button id on click to hide first modal
   $("#btn-continue8").on( "click", function() {
         $('#myModal9').hide();  
   });
   //trigger next modal
   $("#btn-continue8").on( "click", function() {
         $('#myModal10').show();  
   });*/
   
   //set button id on click to hide first modal
   $("#back-modal9").on( "click", function() {
         $('#myModal10').hide();  
   });
   //trigger next modal
   $("#back-modal9").on( "click", function() {
         $('#myModal9').show();  
   });
   
   //set button id on click to hide first modal
   $("#btn-continue9").on( "click", function() {
         $('#myModal10').hide();  
   });
   //trigger next modal
   $("#btn-continue9").on( "click", function() {
         $('#myModal11').show();  
   });
   
   //set button id on click to hide first modal
   $("#manage-website-1").on( "click", function() {
         $('#btn-continuehide').hide();  
         $('#btn-continue').show();  
   });
   //trigger next modal
   
   
   //set button id on click to hide first modal
   $("#manage-website-2").on( "click", function() {
         $('#btn-continue').hide();  
         $('#btn-continuehide').show();  
   });
   //trigger next modal
   
   
   //set button id on click to hide first modal
   $("#btn-continuehide").on( "click", function() {
         $('#myModal0').hide();  
         $('#myModal12').show();  
   });
   //trigger next modal
   
   
   //set button id on click to hide first modal
   $("#back-modal10").on( "click", function() {
         $('#myModal12').hide();  
         $('#myModal0').show();  
   });
   //trigger next modal
   
   
   //set button id on click to hide first modal
   $("#btn-continue10").on( "click", function() {
         $('#myModal12').hide();  
         $('#myModal3').show();  
   });
   //trigger next modal
   
   
   //set button id on click to hide first modal
   $("#manage-website-1").on( "click", function() {
         $('#back-modal22').hide();  
         $('#back-modal2').show();  
   });
   //trigger next modal
   
   
   //set button id on click to hide first modal
   $("#manage-website-2").on( "click", function() {
         $('#back-modal2').hide();  
         $('#back-modal22').show();  
   });
    $("#back-modal22").on( "click", function() {
         $('#myModal3').hide();  
         $('#myModal12').show();  
   });
   //trigger next modal
   

 $("#web_query").on('submit', function(e) {
            e.preventDefault();

            var contactForm = $(this);

            $.ajax({
                url: contactForm.attr('action'),
                type: 'post',
                data: contactForm.serialize(),
                success: function(response){
                    console.log(response.message);
                    flash_success_message(response.message);
                   if(response.status == 'success') 
                    {
                     

                        flash_success_message(response.message);

                        $("#web_query")[0].reset();


                         setTimeout(function(){  

                          $('#myModal11').show();
                          $('#myModal10').hide();

                           }, 3000);

                    }

                    if(response.status == 'error')
                    {

                         flash_error_message(response.message);
                         
                    }
                          
                }
            });
        });
   
</script>
 