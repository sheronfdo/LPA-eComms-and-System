<?php
class Cart{
    private $lpa_client_id;
    private $lpa_stock_id;


      /**
         * @param $lpa_client_id
         * @param $lpa_stock_id
         */

         public function __construct($lpa_client_id, $lpa_stock_id,$lpa_qty,$lpa_size)
         {
            $this->lpa_client_id = $lpa_client_id;
            $this->lpa_stock_id = $lpa_stock_id;
            $this->lpa_qty = $lpa_qty;
            $this->lpa_size = $lpa_size;

         }
         
         /**
         * @return mixed $client_id
         */
        public function getClientId()
        {
            return $this->lpa_client_id;
        }

        /**
         * @param mixed $client_id
         */
        public function setClientId($lpa_client_id)
        {
            $this->lpa_client_id = $lpa_client_id;
        }

        public function getStockId()
        {
            return $this->lpa_stock_id;
        }

        /**
         * @param mixed $StockId
         */
        public function setStockId($lpa_stock_id)
        {
            $this->lpa_stock_id = $lpa_stock_id;
        }


        public function getQty()
        {
            return $this->lpa_qty;
        }

        /**
         * @param mixed $StockId
         */
        public function setQty($lpa_qty)
        {
            $this->lpa_qty = $lpa_qty;
        }

        public function getSize()
        {
            return $this->lpa_size;
        }

        /**
         * @param mixed $StockId
         */
        public function setSize($lpa_size)
        {
            $this->lpa_size = $lpa_size;
        }

    }