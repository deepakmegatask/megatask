<?php if(!defined('BASEPATH')) exit('No direct script access allowed');







class Lists_model extends Base_model
{

    public $table = "mt_lists";

    //set column field database for datatable orderable
    var $column_order = array(null, 'name', 'category_id', 'date_at', 'status',null); 

    //set column field database for datatable searchable 
    var $column_search = array( 'name', 'category_id', 'date_at', 'status'); 

    var $order = array('id' => 'DESC'); // default order



        



        function __construct() {



            parent::__construct();



        }


        public function getcategorylist()
        {
            $this->db->select('category_id');
            $this->db->from($this->table);
            $this->db->where($this->table.'.status',1);
            $this->db->group_by('category_id');
              $query = $this->db->get();

            if ($query->num_rows() > 0)
            {
                $result = $query->result();
                return $result;
            } else {
                return array();
            }
        }
        
        public function getcategorylistdetails($data)
        {

            
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where($this->table.'.category_id',$data);
            $query = $this->db->get();

            if ($query->num_rows() > 0)
            {
                $result = $query->result();
                return $result;
            } else {
                return array();
            }
        }





     function delete($id) {



        $this->db->where('id', $id);



        $this->db->delete($this->table);        



        return $this->db->affected_rows();



    }







    public function find($id) {
            $query = $this->db->select('*')
                    ->from($this->table)
                    ->where('id', $id)
                    ->get();

            if ($query->num_rows() > 0) {
                $result = $query->result();
                return $result[0];
            } else {
                return array();
            }
        }

       // Get  List

        function get_datatables()
        {

            $this->_get_datatables_query();

            if(isset($_POST['length']) && $_POST['length'] != -1)

            $this->db->limit($_POST['length'], $_POST['start']);

            $query = $this->db->get();

            return $query->result();

        }

        // Get Database 

         public function _get_datatables_query()
        {     

            $this->db->from($this->table);

            $i = 0;     

            foreach ($this->column_search as $item) // loop column 

            {

                if(isset($_POST['search']['value']) && $_POST['search']['value']) // if datatable send POST for search

                {

                    if($i===0) // first loop

                    {

                        $this->db->like($item, $_POST['search']['value']);

                    }

                    else

                    {

                        $this->db->or_like($item, $_POST['search']['value']);

                    }

                }

                $i++;

            }

             

            if(isset($_POST['order'])) // here order processing
            {

                $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);

            } 

            else if(isset($this->order))

            {

                $order = $this->order;

                $this->db->order_by(key($order), $order[key($order)]);

            }

        }



        // Count  Filtered

        function count_filtered()
        {

            $this->_get_datatables_query();

            $query = $this->db->get();

            return $query->num_rows();

        }

        // Count all

        public function count_all()
        {

            $this->db->from($this->table);

            return $this->db->count_all_results();

        }



}











  