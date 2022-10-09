<?php 
    require_once  './model/cart.php';
    require_once './database/database.php';

    class CartService extends Cart{

        private $db;

        public function __construct()
        {
        $this->db = new dbconnect();
        } 
        public function insert(){
            $query = "INSERT INTO `lpa_cart`(`lpa_client_id`, `lpa_stock_id`, `lpa_qty`, `lpa_size`) VALUES ('" . $this->getClientId() . "','" . $this->getFirstName() . "','" . $this->getLastName() . "','". $this->getAddress() . "')";
           
        $this->db->insertIntoDb($query);
        }

    }
