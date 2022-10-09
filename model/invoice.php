<?php

class Invoice{
    private $invoice_id;
    private $invoice_date;
    private $invoice_client_id;
    private $invoice_client_name;
    private $invoice_client_address;
    private $invoice_amount;
    private $invoice_status;

      /**
         * @param $invoice_id
         * @param $invoice_date
         * @param $invoice_client_id
         * @param $invoice_client_name
         * @param $invoice_client_address
         * @param $invoice_amount
         * @param $invoice_status
         */

         public function __construct($invoice_id, $invoice_date, $invoice_client_id, $invoice_client_name, $invoice_client_address, $invoice_amount, $invoice_status)
         {
            $this->invoice_id = $invoice_id;
            $this->invoice_date = $invoice_date;
            $this->invoice_client_id = $invoice_client_id;
            $this->invoice_client_name = $invoice_client_name;
            $this->invoice_client_address = $invoice_client_address;
            $this->invoice_amount = $invoice_amount;
            $this->invoice_status = $invoice_status;
         }
         
         /**
         * @return mixed
         */
        public function getInvoiceId()
        {
            return $this->invoice_id;
        }

        /**
         * @param mixed $invoice_id
         */
        public function setInvoiceId($invoice_id)
        {
            $this->invoice_id = $invoice_id;
        }

        /**
         * @return mixed
         */
        public function getDate()
        {
            return $this->invoice_date;
        }

        /**
         * @param mixed $invoice_date
         */
        public function setDate($invoice_date)
        {
            $this->invoice_date = $invoice_date;
        }

        /**
         * @return mixed
         */
        public function getClientId()
        {
            return $this->invoice_client_id;
        }

        /**
         * @param mixed $invoice_client_id
         */
        public function setClientId($invoice_client_id)
        {
            $this->invoice_client_id = $invoice_client_id;
        }

        /**
         * @return mixed
         */
        public function getClientName()
        {
            return $this->invoice_client_name;
        }

        /**
         * @param mixed $invoice_client_name
         */
        public function setClientName($invoice_client_name)
        {
            $this->invoice_client_name = $invoice_client_name;
        }

        /**
         * @return mixed
         */
        public function getClientAddress()
        {
            return $this->invoice_client_address;
        }

        /**
         * @param mixed $invoice_client_address
         */
        public function setClientAddress($invoice_client_address)
        {
            $this->invoice_client_address = $invoice_client_address;
        }

        /**
         * @return mixed
         */
        public function getAmount()
        {
            return $this->invoice_amount;
        }

        /**
         * @param mixed $invoice_amount
         */
        public function setAmount($invoice_amount)
        {
            $this->invoice_amount = $invoice_amount;
        }

        /**
         * @return mixed
         */
        public function getStatus()
        {
            return $this->invoice_status;
        }

        /**
         * @param mixed $invoice_status
         */
        public function setStatus($invoice_status)
        {
            $this->invoice_status = $invoice_status;
        }
         
}
?>