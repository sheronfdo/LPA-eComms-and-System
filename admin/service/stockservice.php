<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once  "../model/stock.php";
require_once "../database/database.php";

class StockService extends Stock
{

    private $db;

    public function __construct()
    {
        $this->db = new dbconnect();
    }

    public function insert()
    {
        $query = "INSERT INTO `lpa_stock`(`lpa_stock_ID`, `lpa_stock_name`, `lpa_stock_desc`, `lpa_stock_onhand`, `lpa_stock_price`, `lpa_stock_status`) VALUES ('" . $this->getStockId() . "','" . $this->getStockName() . "','" . $this->getStockDesc() . "','" . $this->getStockOnhand() . "','" . $this->getStockPrice() . "','" . $this->getStockStatus() . "')";
        $this->db->insertIntoDb($query);
    }
    public function edit()
    {
        $query = "UPDATE `lpa_stock` SET `lpa_stock_name`='" . $this->getStockName() . "',`lpa_stock_desc`='" . $this->getStockDesc() . "',`lpa_stock_onhand`='" . $this->getStockOnhand() . "',`lpa_stock_price`='" . $this->getStockPrice() . "',`lpa_stock_status`='" . $this->getStockStatus() . "' WHERE `lpa_stock_ID`='" . $this->getStockId() . "'";
        $this->db->insertIntoDb($query);
    }
    public function delete()
    {
        $query = "UPDATE `lpa_stock` SET `lpa_stock_status`=0 WHERE `lpa_stock_ID`='" . $this->getStockId() . "'";
        $this->db->insertIntoDb($query);
    }
}
