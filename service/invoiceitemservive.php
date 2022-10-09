<?php 
    require_once  "../model/invoiceitem.php";
    require_once "../database/database.php";

    class InvoiceItemService extends InvoiceItem{

        private $db;

        public function __construct()
        {
        $this->db = new dbconnect();
        } 
        public function insert(){
            $query = "INSERT INTO `lpa_invoice_items`(`lpa_invitem_no `, `lpa_invitem_stock_ID`, `lpa_invitem_stock_name`, `lpa_invitem_qty`, `lpa_invitem_stock_price`, `lpa_invitem_stock_amount`, `lpa_inv_status`) VALUES ('" . $this->getInvItemId() . "','" . $this->getStockId() . "','" . $this->getStockName() . "','". $this->getStockQty() . "','" . $this->getStockPrice() . "','" . $this->getAmount() ."','" . $this->getStatus() ."')";
        $this->db->insertIntoDb($query);
        }

    }