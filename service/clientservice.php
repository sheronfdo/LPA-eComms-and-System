<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once  './model/client.php';
require_once './database/database.php';

class ClientService extends Client
{

    private $db;

    public function __construct()
    {
        $this->db = new dbconnect();
    }
    public function insert()
    {
        $query = "INSERT INTO `lpa_clients`(`lpa_client_ID`, `lpa_client_firstname`, `lpa_client_lastname`, `lpa_client_address`, `lpa_client_phone`, `lpa_client_email`, `lpa_client_status`, `lpa_client_username`, `lpa_client_password`) VALUES ('" . $this->getClientId() . "','" . $this->getFirstName() . "','" . $this->getLastName() . "','" . $this->getAddress() . "','" . $this->getPhone() . "','" . $this->getEmail() . "','" . $this->getStatus() . "','" . $this->getUsername() . "','" . $this->getPassword() . "')";
        // $query = "INSERT INTO `lpa_clients`(`lpa_client_ID`, `lpa_client_firstname`, `lpa_client_lastname`, `lpa_client_address`, `lpa_client_phone`, `lpa_client_email`, `lpa_client_status`, `lpa_client_username`, `lpa_client_password`) VALUES ('CTM2','fhfg','hftgh','ghfghgf','452452424','rtert','1','fgdfgd','dgdzdfvdfbzdfbz')";
        $this->db->insertIntoDb($query);
    }
}
