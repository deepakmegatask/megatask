<?php if(!defined('BASEPATH')) exit('No direct script access allowed');





require APPPATH . '/libraries/BaseController.php';








class Agent extends BaseController


{


   


    public function __construct()


    {


        parent::__construct();


       $this->load->model('admin/user_model');
       $this->load->model('agent/type_model');


    }





    


    public function index()


    {


        $this->isLoggedIn();





        $data = array();


        $this->global['pageTitle'] = 'Agent';


        $this->loadViews("admin/agent/list", $this->global, $data , NULL);


        


    }





    // Add New 


    public function addnew()


    {


    


        $this->isLoggedIn();


        $data = array();
        $userTypeList  = $this->type_model->userTypeList();
         $data['userTypeList'] = $userTypeList;
        $this->global['pageTitle'] = 'Add New Agent';


        $this->loadViews("admin/agent/addnew", $this->global, $data , NULL);


        


    } 





    // Insert Member *************************************************************


    public function insertnow()


    {


        $this->isLoggedIn();


		


		


		


		$this->load->library('form_validation');            


        $this->form_validation->set_rules('fname','fname','trim|required');
        $this->form_validation->set_rules('email','email','trim|required|valid_email');
        $this->form_validation->set_rules('password','password','trim|required');
        $this->form_validation->set_rules('type','type','trim|required');
        $this->form_validation->set_rules('status','status','trim|required');


        


        //form data 


        $form_data  = $this->input->post();


        if($this->form_validation->run() == FALSE)


        {


            $this->addnew();


        }


        else


        {





            // check already exist


            $where = array();

            $email_lowercase = strtolower($form_data['email']);
            $where['email'] = $email_lowercase;


            $returnData = $this->user_model->findDynamic($where);


            if(!empty($returnData)){


               $this->session->set_flashdata('error', $form_data['email'].' already Exist.');


            }else{


                //pre($form_data);exit;


                    $insertData['type']         = $form_data['type'];
                    $insertData['fname']        = $form_data['fname'];
                    $insertData['email']        = $email_lowercase;
                    $insertData['password']     = md5($form_data['password']);
                    $insertData['password_decripted'] = $form_data['password'];
                    $insertData['user_from']       = "Added";
                    $insertData['status']       = $form_data['status'];

                    $insertData['date_at'] = date("Y-m-d H:i:s");
 


    			$result = $this->user_model->save($insertData);


                if($result > 0)


                {


                    $this->session->set_flashdata('success', 'Agent successfully Added');

                    redirect('admin/agent/edit/'.$result);
                }


                else


                { 


                    $this->session->set_flashdata('error', 'Agent Addition failed');
                    redirect('admin/agent/addnew/');

                }


            }// check already    

             redirect('admin/agent/addnew/');

            


          }  


        


    }








    // Member list


    public function ajax_list()


    {


		$list = $this->user_model->get_datatables();


		


		$data = array();


        $no =(isset($_POST['start']))?$_POST['start']:'';


        $userType   = $this->type_model->userTypeList();
        foreach ($list as $currentObj) {





            $temp_date = $currentObj->date_at;


            $selected = ($currentObj->status == 0)?" selected ":"";


            $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';


            $btn .= '<option value="1"  >Active</option>';


            $btn .= '<option value="0" '.$selected.' >Inactive</option>';


            $btn .= '</select>';


            $dateAt = date("d-m-Y H:ia", strtotime($temp_date));





            $no++;


            $row = array();


            $row[] = $no;


           


            $row[] = $currentObj->fname;


            $row[] = $currentObj->email;


            $row[] = $currentObj->password_decripted;
            $row[] = $userType[$currentObj->type];
            $row[] =  $currentObj->user_from;
            $row[] =  $currentObj->message;
            $row[] = $btn;


            $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/agent/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';


            $data[] = $row;


        }


 


        $output = array(


                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',


                        "recordsTotal" => $this->user_model->count_all(),


                        "recordsFiltered" => $this->user_model->count_filtered(),


                        "data" => $data,


                );


        //output to json format


        echo json_encode($output);


    }








    // Status Change


 


    public function statusChange($id = NULL)


    {


        $this->isLoggedIn();


        if($_POST['id'] == null)


        {


            redirect('admin/agent');


        }





        $insertData['id'] = $_POST['id'];


        $insertData['status'] = $_POST['status'];


        $result = $this->user_model->save($insertData);


        exit;


    } 





    // Edit


 


    public function edit($id = NULL)


    {


        





        $this->isLoggedIn();


        if($id == null)


        {


            redirect('admin/agent');


        }




            $userTypeList  = $this->type_model->userTypeList();
            $data['userTypeList'] = $userTypeList;

            $data['edit_data'] = $this->user_model->find($id);


             $this->global['pageTitle'] = 'Agent ';


        $this->loadViews("admin/agent/edit", $this->global, $data , NULL);


        


    } 





    // Delete  *****************************************************************


      function delete()


    {


        


        $this->isLoggedIn();


        $delId = $this->input->post('id');  


        


        $result = $this->user_model->delete($delId); 


            


        if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }


        else { echo(json_encode(array('status'=>FALSE))); }


    }





    // Update Agent*************************************************************


    public function update()


    {


		


        $this->isLoggedIn();


        $this->load->library('form_validation');            


        $this->form_validation->set_rules('fname','fname','trim|required');
        $this->form_validation->set_rules('email','email','trim|required|valid_email');
        $this->form_validation->set_rules('password','password','trim|required');
        $this->form_validation->set_rules('type','type','trim|required');
        $this->form_validation->set_rules('status','status','trim|required');


        


        


        //form data 


        $form_data  = $this->input->post();


        if($this->form_validation->run() == FALSE)


        {


			


                $this->edit($form_data['id']);


        }


        else


        {

            $email_lowercase = strtolower($form_data['email']);
            $where['email'] = $email_lowercase;
            $where['id !='] =  $form_data['id'];


            $returnData = $this->user_model->findDynamic($where);


            if(!empty($returnData)){


               $this->session->set_flashdata('error', $form_data['email'].' already Exist.');


            }else
            {

                 $insertData = array();

                    $insertData['id'] = $form_data['id'];


                    $insertData['type']         = $form_data['type'];
                    $insertData['fname']        = $form_data['fname'];
                    $insertData['email']        = $email_lowercase;
                    $insertData['password']     = md5($form_data['password']);
                    $insertData['password_decripted'] = $form_data['password'];
                    $insertData['status']       = $form_data['status'];
                   /* $insertData['user_from']       = "Added";*/

                    $insertData['date_at'] = date("Y-m-d H:i:s");
                    $result = $this->user_model->save($insertData);


            





            if($result > 0)


            {


                $this->session->set_flashdata('success', ' Agent successfully Updated');


            }


            else


            { 


                $this->session->set_flashdata('error', 'Agent Updation failed');


            }


           

            }
             redirect('admin/agent/edit/'.$form_data['id']);
                   


          }  


        


    }





    


    


    


}





?>