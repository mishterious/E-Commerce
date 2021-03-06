<?php


class E_model extends CI_Model {
   function get_all_products()
   { 
       return $this->db->query("SELECT * FROM products")->result_array();
   }

   function get_product_by_id($id)
   {
   		return $this->db->query("SELECT * FROM products WHERE id = ?", $id)->row_array();
   }
   function get_distinct_category()
   {
      return $this->db->query("SELECT DISTINCT category FROM products")->result_array();
   }
   function get_product_by_category($category)
   {
      return $this->db->query("SELECT * FROM products WHERE category = ?", $category)->result_array();
   }

   function get_admin_by_email($email)
   { 
       return $this->db->query("SELECT * FROM admins WHERE email = ?", $email)->row_array();
   }

   function get_all_orders_()
   { 
       return $this->db->query("SELECT * FROM orders")->result_array();
   }
   
   function add_addr_info($addr)
   {
      $query= "INSERT INTO addresses(f_name, l_name, ship_addr1, ship_addr2, ship_city, ship_state, ship_zip, bill_fname, bill_lname, bill_addr1, bill_addr2, bill_city, bill_state, bill_zip) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $values= array($addr['f_name'], $addr['l_name'], $addr['ship_addr1'], $addr['ship_addr2'], $addr['ship_city'], $addr['ship_state'], $addr['ship_zip'], $addr['bill_fname'], $addr['bill_lname'], $addr['bill_addr1'], $addr['bill_addr2'], $addr['bill_city'], $addr['bill_state'], $addr['bill_zip']);
      return $this->db->query($query, $values);
   }
   // function get_order_info()
   // {
   //      return $this->db->query("SELECT customers.first_name, orders.id, orders.orders.total, orders.status, orders.created_at, addresses.ship_addr1, addresses.ship_addr2, addresses.ship_city, addresses.ship_state, addresses.bill_zip, addresses.bill_addr1, addresses.bill_addr2, addresses.bill_city, addresses.bill_state, addresses.bill_zip FROM addresses JOIN customers ON addresses.customers_id = customers.id JOIN orders ON orders.customers_id = customers.id")->result_array();
       
   // }
   
   function add_product($product)
   {
         $query= "INSERT INTO products(name, description, quantity, price, category, picture1, picture2, picture3, created_at, updated_at) VALUES(?,?,?,?,?,?,?,?,?,?)";
         $values= array($product['name'], $product['description'], $product['quantity'], $product['price'], $product['category'], $product['picture1'], $product['picture2'], $product['picture3'], date("Y-m-d"), date("Y-m-d"));
      return $this->db->query($query, $values);
   }

   function add_customer($customer)
   {
         $query="INSERT INTO customers (first_name, last_name, email, password, created_at, updated_at) VALUES(?,?,?,?,?,?)";
         $values = array($customer['first_name'], $customer['last_name'], $customer['email'], $customer['password'], date("Y-m-d"), date("Y-m-d"));
         return $this->db->query($query, $values);
   }

   function add_order($order)
   {
         $query="INSERT INTO orders (status, total, quantity, customers_id, created_at, updated_at) VALUES (?,?,?,?,?,?)";
         $values= array($order['status'] , $order['total'], $order['quantity'], $order['customer_id'], date("Y-m-d"), date("Y-m-d"));
      return $this->db->query($query, $values);
   }

   function add_admin($admin)
   {
      $query="INSERT INTO admins(email, password, created_at, updated_at) VALUES (?,?,?,?)";
         $values= array($admin['email'], $admin['password'], date("Y-m-d"), date("Y-m-d"));
      return $this->db->query($query, $values);
   }

   function get_all_dashboard()
   {
      return $this->db->query("SELECT customers.first_name, orders.id, orders.total, orders.status, orders.created_at, addresses.bill_addr1, addresses.bill_addr2, addresses.bill_city, addresses.bill_state, addresses.bill_zip FROM addresses JOIN customers ON addresses.customers_id = customers.id JOIN orders ON orders.customers_id = customers.id")->result_array();
   }

   function update_status($update)
   {
      $query = "UPDATE orders SET orders.status = ?, orders.updated_at = ? WHERE orders.id = ?";
      $values = array($update['status'], date("Y-m-d"), $update['id']);
      return $this->db->query($query, $values);
   }

   function update_product_by_id($id)
   {
      $query = "UPDATE products SET name=?, description=?, category=?, picture1 = ?, picture2=?, picture3=?, updated_at= ? WHERE id=?";
      $values = array($id['name'],$id['description'], $id['category'], $id['picture1'], $id['picture2'], $id['picture3'], date("Y-m-d"), $id['id']);
      return $this->db->query($query, $values);
   }

  function get_all_category()
  {
    return $this->db->query("SELECT distinct category FROM products")->result_array();
  }

   function delete_product_by_id($id)
   {
       $this->db->query("DELETE FROM products WHERE id = ?", array($id));
   }

}
?>