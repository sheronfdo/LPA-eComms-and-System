<?php
class Cart{
    private $lpa_client_id;
    private $lpa_stock_id;
    private $lpa_qty;
    private $cartId;




         public function __constructWithoutId($lpa_client_id, $lpa_stock_id,$lpa_qty)
         {
            $this->lpa_client_id = $lpa_client_id;
            $this->lpa_stock_id = $lpa_stock_id;
            $this->lpa_qty = $lpa_qty;


         }

         public function __constructWithtId($cartId,$lpa_client_id)
         {
            $this->cartId = $cartId;
            $this->lpa_client_id = $lpa_client_id;



         }
         
     
        public function getClientId()
        {
            return $this->lpa_client_id;
        }


        public function setClientId($lpa_client_id)
        {
            $this->lpa_client_id = $lpa_client_id;
        }

        public function getStockId()
        {
            return $this->lpa_stock_id;
        }

        public function setStockId($lpa_stock_id)
        {
            $this->lpa_stock_id = $lpa_stock_id;
        }


        public function getQty()
        {
            return $this->lpa_qty;
        }


        public function setQty($lpa_qty)
        {
            $this->lpa_qty = $lpa_qty;
        }


        public function getCartId()
        {
            return $this->cartId;
        }


        public function setCartId($cartId)
        {
            $this->cartId = $cartId;
        }


    }