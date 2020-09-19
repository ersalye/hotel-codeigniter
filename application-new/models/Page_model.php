<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Page_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get page by id
     */
    function get_page($id)
    {
        return $this->db->get_where('pages',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all pages count
     */
    function get_all_pages_count()
    {
        $this->db->from('pages');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all pages
     */
    function get_all_pages($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('pages')->result_array();
    }
        
    /*
     * function to add new page
     */
    function add_page($params)
    {
        $this->db->insert('pages',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update page
     */
    function update_page($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('pages',$params);
    }
    
    /*
     * function to delete page
     */
    function delete_page($id)
    {
        return $this->db->delete('pages',array('id'=>$id));
    }
}
