<?php 
    require_once  "../model/client.php";
    require_once "../database/database.php";

    class ClientService extends Client{

        private $db;

        public function __construct()
        {
        $this->db = new dbconnect();
        } 
        public function insert(){
            $query = "INSERT INTO `lpa_clients`(`lpa_client_ID `, `lpa_client_firstname`, `lpa_client_lastname`, `lpa_client_address`, `lpa_client_phone`, `lpa_client_status`) VALUES ('" . $this->getClientId() . "','" . $this->getFirstName() . "','" . $this->getLastName() . "','". $this->getAddress() . "','" . $this->getPhone() . "','" . $this->getStatus() ."')";
        $this->db->insertIntoDb($query);
        }

    }
