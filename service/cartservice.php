<?php 
    require_once  './model/cart.php';
    require_once './database/database.php';

    class CartService extends cart{

        private $db;

        public function __construct()
        {
        $this->db = new dbconnect();
        } 
        public function insert(){
            $query = "INSERT INTO `lpa_cart`(`lpa_client_id`, `lpa_stock_id`, `lpa_qty`) VALUES ('" . $this->getClientId() . "','" . $this->getStockId() . "','" . $this->getQty() . "')";
           
        $this->db->insertIntoDb($query);
        }
        public function delete(){
            $query = "UPDATE `lpa_cart` SET status = '0' WHERE lpa_stock_id = '" . $this->getCartId() . "' AND lpa_client_id='" . $this->getClientId() . "'";
           
        $this->db->insertIntoDb($query);
        }

    }
