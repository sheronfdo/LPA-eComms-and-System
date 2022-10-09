<?php 
    require_once  "../model/invoice.php";
    require_once "../database/database.php";

    class InvoiceService extends Invoice{

        private $db;

        public function __construct()
        {
        $this->db = new dbconnect();
        } 
        public function insert(){
            $query = "INSERT INTO `lpa_invoices`(`lpa_inv_no`, `lpa_inv_date`, `lpa_inv_client_ID`, `lpa_inv_client_name`, `lpa_inv_client_address`, `lpa_inv_amount`, `lpa_inv_status`) VALUES ('" . $this->getInvoiceId() . "','" . $this->getDate() . "','" . $this->getClientId() . "','". $this->getClientName() . "','" . $this->getClientAddress() . "','" . $this->getAmount() ."','" . $this->getStatus() ."')";
        $this->db->insertIntoDb($query);
        }

    }