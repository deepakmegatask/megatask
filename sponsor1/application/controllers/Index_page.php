<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Index_page extends BaseController {
 	

 	
	public function __construct()
    {
        parent::__construct();
       $this->load->model('webquery_model');
    }
	 
	public function index()
	{
		$this->load->view('index');
	}

	public function save_query()
	{
		 //form data 




		$this->load->library('form_validation');            
        $this->form_validation->set_rules('email_for_quote','email_for_quote','required');
        $this->form_validation->set_rules('mobile_for_quote','mobile_for_quote','required');
        

 $form_data      = $this->input->post();
 
        

        if($this->form_validation->run() == FALSE)
        {

             $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );

            
        }
        else
        {

                        $form_data      = $this->input->post();

             

                    $insertData = array();
                    $insertData['query_type']                                           = $form_data['query_type'];
                    $insertData['which_platform_is_your_website_built_on']              = (isset($form_data['which_platform_is_your_website_built_on']))?$form_data['which_platform_is_your_website_built_on']:'';
                    $insertData['which_platform_is_your_website_built_on_other']        = (isset($form_data['which_platform_is_your_website_built_on_other']))?$form_data['which_platform_is_your_website_built_on_other']:'';
                    $insertData['what_are_your_website_need']                           = (isset($form_data['what_your_website_need']))?json_encode($form_data['what_your_website_need']):'';
                    $insertData['what_are_your_website_need_other']                     = (isset($form_data['what_your_website_need_other']))?$form_data['what_your_website_need_other']:'';
                    $insertData['what_type_of_business_is_for']                         = $form_data['what_type_of_business_is_for'];
                    $insertData['what_type_of_business_is_for_other']                   = $form_data['what_type_of_business_is_for_other'];
                    $insertData['what_industry_do_you_operate']                         = $form_data['what_industry_do_you_operate'];
                    $insertData['what_industry_do_you_operate_other']                   = $form_data['what_industry_do_you_operate_other'];
                    $insertData['when_you_like_website_go_live']                        = $form_data['when_you_like_website_go_live'];
                    $insertData['when_you_like_website_go_live_other']                  = $form_data['when_you_like_website_go_live_other'];
                    $insertData['what_is_your_estimate_budget_for_this_project']        = $form_data['what_is_your_estimate_budget_for_this_project'];
                    $insertData['what_is_your_estimate_budget_for_this_project_other']  = $form_data['what_is_your_estimate_budget_for_this_project_other'];
                    $insertData['how_to_make_hiring_decision']                          = $form_data['how_to_make_hiring_decision'];
                    $insertData['how_to_make_hiring_decision_other']                    = $form_data['how_to_make_hiring_decision_other'];
                    $insertData['email']                                                = $form_data['email_for_quote'];
                    $insertData['status']                                               = '1';
                    $insertData['mobile']                                               = $form_data['mobile_for_quote'];
                    $insertData['date_at']          = date("Y-m-d H:i:s");
                    $result     = $this->webquery_model->save($insertData);
                       



                        $type = '';
                        $website_need = '';
                        $web_type = '';
                        $website_go_live = '';
                        $estimate_budget = '';
                        $hiring_decision = '';


                    $contact_name = $form_data['email_for_quote'];
                    $contact_email = $form_data['email_for_quote'];
                    $contact_mobile = $form_data['mobile_for_quote'];
                    if($form_data['query_type']=='1')
                    {
                        $type = " Create a new website";
                    }else if($form_data['query_type']=='2')
                    {
                        $type = "  Make changes to my current website";
                    }

                    $website_need = '';
                    if(!empty($form_data['what_your_website_need']))
                    {
                        foreach ($form_data['what_your_website_need'] as $key => $value) {
                            $website_need .=$value.',';
                        }

                    } 

                    $website_built_on = '';
                    if(!empty($form_data['which_platform_is_your_website_built_on']))
                    {
                        $website_built_on = "website built on : ".$form_data['which_platform_is_your_website_built_on']."/n";

                    }


                     if($form_data['what_type_of_business_is_for']=='Other')
                    {
                        $web_type = $form_data['what_type_of_business_is_for_other'];
                    }else  
                    {
                        $web_type = $form_data['what_type_of_business_is_for'];
                    }



                     if($form_data['what_industry_do_you_operate']=='Other')
                    {
                        $industry_type = $form_data['what_industry_do_you_operate_other'];
                    }else  
                    {
                        $industry_type = $form_data['what_industry_do_you_operate'];
                    }

					if($form_data['what_is_your_estimate_budget_for_this_project']=='Other')
                    {
                        $estimate_budget = $form_data['what_is_your_estimate_budget_for_this_project_other'];
                    }else  
                    {
                        $estimate_budget = $form_data['what_is_your_estimate_budget_for_this_project'];
                    }



                     if($form_data['when_you_like_website_go_live']=='Other')
                    {
                        $website_go_live = $form_data['when_you_like_website_go_live_other'];
                    }else  
                    {
                        $website_go_live = $form_data['when_you_like_website_go_live'];
                    }


                     if($form_data['how_to_make_hiring_decision']=='Other')
                    {
                        $hiring_decision = $form_data['how_to_make_hiring_decision_other'];
                    }else  
                    {
                        $hiring_decision = $form_data['how_to_make_hiring_decision'];
                    }


                 


                    $html_data = " web design requirement For : ".  $type."\n";
                    $html_data .=" web design requirement / Platform  : ".  $website_need."\n";
                    $html_data .=" web Type of Business  For : ".  $web_type."\n";
                    $html_data .=" website To go For live : ".  $website_go_live."\n";
                    $html_data .=" website estimated budget : ".  $estimate_budget."\n";
                    $html_data .=" website to make a hiring : ".  $hiring_decision."\n";
                    $html_data .=$website_built_on."\n";



                    $description =$html_data;


                    $this->load->library('email');
                    $toemail = 'muzzuaj@gmail.com'; 
                    //$toemail = 'naqviabbas817@gmail.com'; 
                    
                    $this->email->from('support@megatasktechnologies.com', 'New Adds Lead');
                    $this->email->to($toemail);
 					$this->email->subject('New Lead Arival ');
					$message = "New Lead Arival \n";
					$message .= "Name :".$contact_name." \n";
					$message .= "Email :".$contact_email." \n";
					$message .= "Mobile :".$contact_mobile." \n";
					$message .= "Description : \n".$description." \n";
                    $this->email->message($message);

                    $resulst = $this->email->send(); 

                    
                    if($result > 0)
                    {
                         $response = array(
                            'status' => 'success',
                            'message' => "Great - we've got pros ready and available."
                        );
                    }
                    else
                    { 
                        $response = array(
                            'status' => 'error',
                            'message' => "Oh - we've got pros ready and available."
                        );
                    }
                  
             }
          $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
	}

	
}
