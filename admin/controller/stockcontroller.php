<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);

require_once '../service/stockService.php';
require_once '../service/StockImageService.php';
require_once "../common/ImageUpload.php";
require_once "../database/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {

        $stockId = $_POST["id"];
        $stockName = $_POST["name"];
        $stockDesc = $_POST["desc"];
        $stockOnhand = $_POST["onhand"];
        $stockPrice = $_POST["price"];
        $stockStatus = $_POST["status"];

        $ps = new StockService();
        $ps->__construct1($stockId, $stockName, $stockDesc, $stockOnhand, $stockPrice, $stockStatus);
        $insertedId = $ps->insert();

        //echo "<body><script src=\"modal.js\">viewModal(1,'success', 'successfull');</script></body>";

        foreach ($_FILES as $value) {
            if (!empty($value)) {
                $imageName = ImageUpload::upload($value);
                $ips = new StockImageService();
                $ips->__construct1($stockId, $imageName);
                $ips->insert();
            }
        }
    }
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["getstock"]) and isset($_GET["id"])) {
        $db = new dbconnect();
        $result = $db->getfromdb("SELECT lpa_stock.`lpa_stock_ID`, `lpa_stock_name`, `lpa_stock_desc`, `lpa_stock_onhand`, `lpa_stock_price`, `lpa_stock_status`, lpa_stock_image.lpa_stock_image FROM `lpa_stock` LEFT JOIN lpa_stock_image ON lpa_stock.lpa_stock_ID=lpa_stock_image.lpa_stock_ID WHERE lpa_stock_ID=" . $_GET["id"]);
        $output = array();
        while ($row = $result->fetch_assoc()) {
            $output[$row['lpa_stock_ID']] = array(
                'lpa_stock_ID' => $row['lpa_stock_ID'],
                'lpa_stock_name' => $row['lpa_stock_name'],
                'lpa_stock_desc' => $row['lpa_stock_desc'],
                'lpa_stock_onhand' => $row['lpa_stock_onhand'],
                'lpa_stock_price' => $row['lpa_stock_price'],
                'lpa_stock_status' => $row['lpa_stock_status'],
                'lpa_stock_image' => $row['lpa_stock_image']
            );
        }
        header("Content-Type: application/json");
        echo json_encode($output);
    } else
        if (isset($_GET["getstock"])) {
        $db = new dbconnect();
        $result = $db->getfromdb("SELECT lpa_stock.`lpa_stock_ID`, `lpa_stock_name`, `lpa_stock_desc`, `lpa_stock_onhand`, `lpa_stock_price`, `lpa_stock_status`, lpa_stock_image.lpa_stock_image FROM `lpa_stock` LEFT JOIN lpa_stock_image ON lpa_stock.lpa_stock_ID=lpa_stock_image.lpa_stock_ID");
        $output = array();
        while ($row = $result->fetch_assoc()) {
            $output[$row['lpa_stock_ID']] = array(
                'lpa_stock_ID' => $row['lpa_stock_ID'],
                'lpa_stock_name' => $row['lpa_stock_name'],
                'lpa_stock_desc' => $row['lpa_stock_desc'],
                'lpa_stock_onhand' => $row['lpa_stock_onhand'],
                'lpa_stock_price' => $row['lpa_stock_price'],
                'lpa_stock_status' => $row['lpa_stock_status'],
                'lpa_stock_image' => $row['lpa_stock_image']
            );
        }
        header("Content-Type: application/json");
        echo json_encode($output);
    }
}
