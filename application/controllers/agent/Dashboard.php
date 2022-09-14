<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 * @since : 15 November 2016
 */
class Dashboard extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->isAgentLoggedIn();  
        $this->load->model('agent/lists_model');
        $this->load->model('agent/type_model');

    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {



         

		$this->global['pageTitle'] = 'Dashboard';
        
            $data = array();
            $where = array();
            $where['status'] = '1';
            $all_list  = $this->lists_model->findDynamic($where);
            $getcategorylist  = $this->lists_model->getcategorylist();
            

            


        foreach($getcategorylist as $k=>$v)
        {
             

            $l_data['category_id'][$v->category_id] = $v;  
            $getcategorylist  = $this->lists_model->getcategorylistdetails($v->category_id);
            $l_data['list_dtl'][$v->category_id] =  $getcategorylist;
                       
        } 
            


            $data = $l_data;
            $data['all_list'] = $all_list;
             $data['get_category_list']  = $this->type_model->getCategoryList();
             
              
         $this->loadAgentViews("agent/dashboard", $this->global, $data , NULL);
        
    }
    

     

     

   

    
    
     

   
     


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteUser($userId, $userInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
    /**
     * This function is used to load the change password screen
     */
    function loadChangePass()
    {
        $this->global['pageTitle'] = 'Ale-izba : Change Password';
        
        $this->vendorView("vendor/changePassword", $this->global, NULL, NULL);
    }
    
    
    /**
     * This function is used to change the password of the user
     */
    function changePassword()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
       
        if($this->form_validation->run() == FALSE)
        {
            $this->loadChangePass();
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password not correct');
                redirect('vendor/dashboard/loadChangePass');
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
                 redirect('vendor/dashboard/loadChangePass');
            }
        }
    }

    
}

?>