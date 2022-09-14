<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.

 * @since : 15 November 2016
 */
class Lists extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
         $this->isLoggedIn();
        $this->load->model('agent/lists_model');
        $this->load->model('agent/type_model');

     }

    /**
     * Index Page for this controller.
     */
     public function index()
    {


        $this->isLoggedIn();
            $data = array();
            
        $this->global['pageTitle'] = 'Lists';
        $this->loadViews("admin/lists/list", $this->global, $data , NULL);
        
    }
    
     /**
     * add new  Page for this controller.
     */
     public function addnew()
    {
        $data['get_category_list']  = $this->type_model->getCategoryList();
        $this->global['pageTitle'] = 'Add New Lists';
        $this->loadViews("admin/lists/addnew", $this->global, $data , NULL);
        
    }
public function insertnow()


    {


        $this->isAgentLoggedIn();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('category','category','trim|required');
        $this->form_validation->set_rules('name','name','trim|required');
        $this->form_validation->set_rules('status','status','trim|required');
        $this->form_validation->set_rules('description','description','trim|required');


 

        


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


            $where['name'] = $form_data['name'];
            $where['category_id'] = $form_data['category'];


            $returnData = $this->lists_model->findDynamic($where);

             $insertData = array();

            if(!empty($returnData)){


 
                $insertData['id'] = $returnData[0]->id;

            }  
            $strtolower =  strtolower($form_data['name']);
            $title      = str_replace(' ', '-',$strtolower);
            $insertData['name'] =  ucwords($form_data['name']);  ;
            $insertData['title']= $title ;
            $insertData['category_id'] = $form_data['category'];
            $insertData['description'] = base64_encode($form_data['description']);
            $insertData['date_at'] = date("Y-m-d H:i:s");


                 


                $insertData['status'] = $form_data['status'];


                


                 


                $result = $this->lists_model->save($insertData);


                if($result > 0)


                {


                    $this->session->set_flashdata('success', 'List successfully Added');


                }


                else


                { 


                    $this->session->set_flashdata('error', 'List Addition failed');


                }
                redirect('admin/lists/addnew');


          }  


        


    }

    public function update()


    {


          $this->isLoggedIn();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('category','category','trim|required');
        $this->form_validation->set_rules('name','name','trim|required');
        $this->form_validation->set_rules('status','status','trim|required');
        $this->form_validation->set_rules('description','description','trim|required');


        $form_data  = $this->input->post();


        if($this->form_validation->run() == FALSE)


        {


            $this->edit($form_data['id']);


        }


        else


        { 
            $where = array();

            $insertData['id'] = $form_data['id'];

             
            $strtolower =  strtolower($form_data['name']);
            $title      = str_replace(' ', '-',$strtolower);
            $insertData['name'] =  ucwords($form_data['name']);  ;
            $insertData['title']= $title ;
            $insertData['category_id'] = $form_data['category'];
            $insertData['description'] = base64_encode($form_data['description']);
            $insertData['update_at'] = date("Y-m-d H:i:s");
             $insertData['status'] = $form_data['status'];

              $result = $this->lists_model->save($insertData);


                if($result > 0)


                {


                    $this->session->set_flashdata('success', 'List successfully Updated');


                }


                else


                { 


                    $this->session->set_flashdata('error', 'List Updation failed');


                }
                redirect('admin/lists/edit/'.$form_data['id']);


          }  


        


    }



    

      // Delete Member *****************************************************************
      function delete()
    {
        $this->isLoggedIn();
        $delId = $this->input->post('id');  
        $result = $this->lists_model->delete($delId);           
        if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
        else { echo(json_encode(array('status'=>FALSE))); }
    }
   
    public function ajax_list()


    {


        $list = $this->lists_model->get_datatables();


        


        $data = array();


        $no =(isset($_POST['start']))?$_POST['start']:'';


        $get_category_list  = $this->type_model->getCategoryList();
        foreach ($list as $currentObj) {

            $selected = ($currentObj->status == 0)?" selected ":"";


            $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';


            $btn .= '<option value="1"  >Active</option>';


            $btn .= '<option value="0" '.$selected.' >Inactive</option>';


            $btn .= '</select>';


            
            $temp_date = $currentObj->date_at;


            $date_at = date("d-m-Y", strtotime($temp_date));

            $no++;


            $row = array();


            $row[] = $no;


            


            $row[] = $currentObj->name;
            $row[] = $get_category_list[$currentObj->category_id];


       /*     $row[] = '';*/


 
            $row[] = $date_at;
            $row[] = $btn;


            $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/lists/edit/'.$currentObj->id.'" title="Edit" >Edit</a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';


            $data[] = $row;


        }


 


        $output = array(


                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',


                        "recordsTotal" => $this->lists_model->count_all(),


                        "recordsFiltered" => $this->lists_model->count_filtered(),


                        "data" => $data,


                );


        //output to json format


        echo json_encode($output);


    }



     public function edit($id = NULL)
    {
        
        //exit;
   $this->isLoggedIn();
    if($id == null)
        {
            redirect('admin/lists');
        }

        
        $data['edit_data'] = $this->lists_model->find($id);
        $data['get_category_list']  = $this->type_model->getCategoryList();

        $this->global['pageTitle'] = 'Edit Lists';
        $this->loadViews("admin/lists/edit", $this->global, $data , NULL);
        
        
    } 





    // Status Change


 


    public function statusChange($id = NULL)


    {
        if($_POST['id'] == null)


        {


            redirect('agent/lists');


        }





        $insertData['id'] = $_POST['id'];


        $insertData['status'] = $_POST['status'];
        $insertData['update_at'] = date("Y-m-d H:i:s");

        $result = $this->lists_model->save($insertData);


        exit;


    } 

     
  
 
}

?>