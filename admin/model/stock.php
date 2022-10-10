<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
class Stock
{
    private $stock_id;
    private $stock_name;
    private $stock_desc;
    private $stock_onhand;
    private $stock_price;
    private $stock_status;

    /**
     * @param $stock_id
     * @param $stock_name
     * @param $stock_desc
     * @param $stock_onhand
     * @param $stock_price
     * @param $stock_status
     */
    public function __construct1($stock_id, $stock_name, $stock_desc, $stock_onhand, $stock_price, $stock_status)
    {
        $this->stock_id = $stock_id;
        $this->stock_name = $stock_name;
        $this->stock_desc = $stock_desc;
        $this->stock_onhand = $stock_onhand;
        $this->stock_price = $stock_price;
        $this->stock_status = $stock_status;
    }

    /**
     * @return mixed
     */
    public function getStockId()
    {
        return $this->stock_id;
    }

    /**
     * @param mixed $stock_id
     */
    public function setStockId($stock_id)
    {
        $this->stock_id = $stock_id;
    }

    /**
     * @return mixed
     */
    public function getStockName()
    {
        return $this->stock_name;
    }

    /**
     * @param mixed $stock_name
     */
    public function setStockName($stock_name)
    {
        $this->stock_name = $stock_name;
    }

    /**
     * @return mixed
     */
    public function getStockDesc()
    {
        return $this->stock_desc;
    }

    /**
     * @param mixed $stock_desc
     */
    public function setStockDesc($stock_desc)
    {
        $this->stock_desc = $stock_desc;
    }

    /**
     * @return mixed
     */
    public function getStockOnhand()
    {
        return $this->stock_onhand;
    }

    /**
     * @param mixed $stock_onhand
     */
    public function setStockOnhand($stock_onhand)
    {
        $this->stock_onhand = $stock_onhand;
    }

    /**
     * @return mixed
     */
    public function getStockPrice()
    {
        return $this->stock_price;
    }

    /**
     * @param mixed $stock_price
     */
    public function setStockPrice($stock_price)
    {
        $this->stock_price = $stock_price;
    }

    /**
     * @return mixed
     */
    public function getStockStatus()
    {
        return $this->stock_status;
    }

    /**
     * @param mixed $stock_status
     */
    public function setStockStatus($stock_status)
    {
        $this->stock_status = $stock_status;
    }
}
