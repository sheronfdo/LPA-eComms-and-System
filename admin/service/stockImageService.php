<?php 
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once "../model/stockImage.php";
require_once "../database/database.php";
class StockImageService extends StockImage
{

    private $db;

    public function __construct()
    {
        $this->db = new dbconnect();
    }

    public function insert()
    {
        $query = "INSERT INTO `lpa_stock_image`(`lpa_stock_ID`, `lpa_stock_image`) VALUES ('" . $this->getStockId() . "','" . $this->getStockImageName() . "')";
        $this->db->insertIntoDb($query);
    }
    public function edit()
    {
        $query = "UPDATE `lpa_stock_image` SET `lpa_stock_image`='" . $this->getStockImageName() . "' WHERE `lpa_stock_ID`='" . $this->getStockId() . "'";
        $this->db->insertIntoDb($query);
    }
}
