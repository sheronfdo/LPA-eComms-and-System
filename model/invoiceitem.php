<?php

class InvoiceItem{
    private $invitem_id;
    private $invitem_stock_id;
    private $invitem_stock_name;
    private $invitem_stock_qty;
    private $invitem_stock_price;
    private $invitem_stock_amount;
    private $inv_status;

      /**
         * @param $invitem_id
         * @param $invitem_stock_id
         * @param $invitem_stock_name
         * @param $invitem_stock_qty
         * @param $invitem_stock_price
         * @param $invitem_stock_amount
         * @param $inv_status
         */

         public function __construct($invitem_id, $invitem_stock_id, $invitem_stock_name, $invitem_stock_qty, $invitem_stock_price, $invitem_stock_amount, $inv_status)
         {
            $this->invitem_id = $invitem_id;
            $this->invitem_stock_id = $invitem_stock_id;
            $this->invitem_stock_name = $invitem_stock_name;
            $this->invitem_stock_qty = $invitem_stock_qty;
            $this->invitem_stock_price = $invitem_stock_price;
            $this->invitem_stock_amount = $invitem_stock_amount;
            $this->inv_status = $inv_status;
         }
         
         /**
         * @return mixed
         */
        public function getInvItemId()
        {
            return $this->invinvitem_idoice_id;
        }

        /**
         * @param mixed $invitem_id
         */
        public function setInvItemId($invitem_id)
        {
            $this->invitem_id = $invitem_id;
        }

        /**
         * @return mixed
         */
        public function getStockId()
        {
            return $this->invitem_stock_id;
        }

        /**
         * @param mixed $invitem_stock_id
         */
        public function setStockId($invitem_stock_id)
        {
            $this->invitem_stock_id = $invitem_stock_id;
        }

        /**
         * @return mixed
         */
        public function getStockName()
        {
            return $this->invitem_stock_name;
        }

        /**
         * @param mixed $invitem_stock_name
         */
        public function setStockName($invitem_stock_name)
        {
            $this->invitem_stock_name = $invitem_stock_name;
        }

        /**
         * @return mixed
         */
        public function getStockQty()
        {
            return $this->invitem_stock_qty;
        }

        /**
         * @param mixed $invitem_stock_qty
         */
        public function setStockQty($invitem_stock_qty)
        {
            $this->invitem_stock_qty = $invitem_stock_qty;
        }

        /**
         * @return mixed
         */
        public function getStockPrice()
        {
            return $this->invitem_stock_price;
        }

        /**
         * @param mixed $invitem_stock_price
         */
        public function setStockPrice($invitem_stock_price)
        {
            $this->invitem_stock_price = $invitem_stock_price;
        }

        /**
         * @return mixed
         */
        public function getAmount()
        {
            return $this->invitem_stock_amount;
        }

        /**
         * @param mixed $invitem_stock_amount
         */
        public function setAmount($invitem_stock_amount)
        {
            $this->invitem_stock_amount = $invitem_stock_amount;
        }

        /**
         * @return mixed
         */
        public function getStatus()
        {
            return $this->inv_status;
        }

        /**
         * @param mixed $inv_status
         */
        public function setStatus($inv_status)
        {
            $this->inv_status = $inv_status;
        }
         
}
?>