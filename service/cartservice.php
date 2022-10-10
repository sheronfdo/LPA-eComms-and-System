<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once  './model/cart.php';
require_once './database/database.php';

class CartService extends Cart
{

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
    
