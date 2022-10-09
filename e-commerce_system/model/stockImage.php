<?php 

    class StockImage{
        private $stock_id;
        private $stock_image_name;

        /**
         * @param $stock_id
         * @param $stock_image_name
         */
        public function __construct1($stock_id, $stock_image_name)
        {
            $this->stock_id = $stock_id;
            $this->stock_image_name = $stock_image_name;
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
        public function getStockImageName()
        {
            return $this->stock_image_name;
        }

        /**
         * @param mixed $stock_image_name
         */
        public function setStockImageName($stock_image_name)
        {
            $this->stock_image_name = $stock_image_name;
        }



    }

?>