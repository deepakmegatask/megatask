<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



class Type_model extends Base_model
{

    public $table = "mt_type";

    //set column field database for datatable orderable
    var $column_order = array(null, 'name', 'slug', 'status'); 

    //set column field database for datatable searchable 
    var $column_search = array('name'); 

    var $order = array('id' => 'asc'); // default order



        



        function __construct() {



            parent::__construct();



        }







     function delete($id) {



        $this->db->where('id', $id);



        $this->db->delete($this->table);        



        return $this->db->affected_rows();



    }
	// get type list
        public function getCategoryList(){
            $type = array();
            $type[1] = "Web";
            $type[2] = "Android";
            $type[3] = "Marketing";
			return $type;
        }

         // get type list
        public function userTypeList(){
            $type = array();
            $type[1] = "Admin";
            $type[2] = "User";
            $type[3] = "Agent";
            $type[4] = "Undefined User ";
            return $type;

            /*1:Admin, 2:User, 3:Agent, 4:Undefined User  */
        }
        
	}
  
