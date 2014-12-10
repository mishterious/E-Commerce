<?php


class E_model extends CI_Model {
   function get_all_products()
   {
       return $this->db->query("SELECT * FROM Products")->result_array();
   }
}
?>
