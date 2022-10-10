<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once('../model/user.php');
require_once('../database/database.php');
class UserService extends User
{
    private $db;


    public function __construct()
    {
        $this->db = new dbConnect();
    }

    public function insertUser()
    {
        $query = "INSERT INTO `lpa_users`(`lpa_user_ID`, `lpa_user_username`, `lpa_user_password`, `lpa_user_firstname`, `lpa_user_lastname`, `lpa_user_group`, `lpa_inv_status`) VALUES ('" . $this->getId() . "','" . $this->getUsername() . "','" . $this->getPassword() . "','" . $this->getFirstname() . "','" . $this->getLastname() . "','" . $this->getGroup() . "','" . $this->getStatus() . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateUser()
    {
        $query = "UPDATE `lpa_users` SET `lpa_user_username`='" . $this->getUsername() . "',`lpa_user_password`='" . $this->getPassword() . "',`lpa_user_firstname`='" . $this->getFirstname() . "',`lpa_user_lastname`='" . $this->getLastname() . "',`lpa_user_group`='" . $this->getGroup() . "' WHERE `lpa_user_ID`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteUser()
    {
        $query = "UPDATE `lpa_users` SET `lpa_inv_status`=0 WHERE `lpa_user_ID`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
