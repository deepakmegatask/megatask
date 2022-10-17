<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



 

class Blogs extends CI_Controller


{


    


    /**


     * This is default constructor of the class


     */


    public function __construct()


    {


        parent::__construct();


        //$this->load->model('admin/product_model');
        $this->load->model('admin/blog_model');



        $this->load->library('base_library');
        $this->load->library("pagination");
       // $this->load->library("pagination");



        // Cookie helper


        $this->load->helper('cookie');


     }











    /**


     * Index Page for this controller.


     */


    // Index =============================================================


    public function index($data='')

    {
      
      $data = array();
      // Define =========================== 


       $data["title"]="Mega Blog";


       $data["file"]="public/blog/index";


        /*to fetch active blogs start*/
            $where = array();

            $where['status'] = 1;


            $returnData = $this->blog_model->findDynamic($where);
        /*to fetch active blogs end*/
       $data["list_blogs"]= $returnData;



       /*pagination start end*/
        $config = array();
        $config["base_url"] = base_url() . "blog";
        $config["total_rows"] = $this->blog_model->get_count();
        $config['per_page'] = 3; 
        $config['uri_segment'] = 12; 
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class=" page-item ">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active "><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['list_blogs'] = $this->blog_model->get_blogs($config["per_page"], $page);

        $data["canonical"] = base_url()."blog";
        $data["alternate"] = base_url()."blog";

        $data["twitter_site"] = "";
        $data["twitter_title"] = "";
        $data["twitter_description"] = "";

        //footer
        $data["companyname"] = "";
        $data["authname"] = "";
        $data["footdesc"] = "";
        $data["mpnnumber"] = "";
        $data["ratingvalue"] = "";

       $this->load
            ->view('public/header/template', $data);


    } 

    
    public function blog_detail($slugs)


    {
      
      $data = array();
      // Define =========================== 


       $data["title"]="Mega Blog";

        /*to fetch active blogs start*/
            $where = array();

            $where['slug_url'] = $slugs;


            $returnData = $this->blog_model->findDynamic($where);
        /*to fetch active blogs end*/
$returnData = $returnData[0];
if(!empty($returnData))
{

}else
{
    redirect(base_url()."blog");
}
$data["blogs_details"]= $returnData;

       $data["title"]=$returnData->meta_title;
       $data["meta_title"]=$returnData->meta_title;
       $data["meta_keyword"]=$returnData->meta_keyword;
       $data["meta_description"]=$returnData->meta_description;
       $data["meta_robot"]=$returnData->meta_robot;
       $data["canonical"] = base_url()."blog/".$slugs;
        $data["alternate"] = base_url()."blog/".$slugs;

        $data["twitter_site"] = "";
        $data["twitter_title"] = "";
        $data["twitter_description"] = "";

        //footer
        $data["companyname"] = "";
        $data["authname"] = "";
        $data["footdesc"] = "";
        $data["mpnnumber"] = "";
        $data["ratingvalue"] = "";


       $data["file"]="public/blog/details";


      $this->load
            ->view('public/header/template', $data);



    } 





}





?>