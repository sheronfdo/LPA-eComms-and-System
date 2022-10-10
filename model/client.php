<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
class Client
{
    private $client_id;
    private $client_firstname;
    private $client_lastname;
    private $client_address;
    private $client_phone;
    private $client_email;
    private $client_status;
    private $client_username;
    private $client_password;

    /**
     * @param $client_id
     * @param $client_firstname
     * @param $client_lastname
     * @param $client_address
     * @param $client_phone
     * @param $client_status
     * @param $client_username;
     * @param $client_password;
     * @param $client_email;
     */

    public function __constructId($client_id, $client_firstname, $client_lastname, $client_address, $client_phone, $client_email, $client_status, $client_username, $client_password)
    {
        $this->client_id = $client_id;
        $this->client_firstname = $client_firstname;
        $this->client_lastname = $client_lastname;
        $this->client_address = $client_address;
        $this->client_phone = $client_phone;
        $this->client_email = $client_email;
        $this->client_status = $client_status;
        $this->client_username = $client_username;
        $this->client_password = $client_password;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param mixed $client_id
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->client_firstname;
    }

    /**
     * @param mixed $client_firstname
     */
    public function setFirstName($client_firstname)
    {
        $this->client_firstname = $client_firstname;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->client_lastname;
    }

    /**
     * @param mixed $client_lastname
     */
    public function setLastName($client_lastname)
    {
        $this->client_lastname = $client_lastname;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->client_address;
    }

    /**
     * @param mixed $client_address
     */
    public function setAddress($client_address)
    {
        $this->client_address = $client_address;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->client_phone;
    }

    /**
     * @param mixed $client_phone
     */
    public function setPhone($client_phone)
    {
        $this->client_phone = $client_phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->client_email;
    }

    /**
     * @param mixed $client_email
     */
    public function setEmail($client_email)
    {
        $this->client_email = $client_email;
    }
    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->client_status;
    }

    /**
     * @param mixed $client_status
     */
    public function setStatus($client_status)
    {
        $this->client_status = $client_status;
    }
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->client_username;
    }

    /**
     * @param mixed $client_username
     */
    public function setUsername($client_username)
    {
        $this->client_username = $client_username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->client_password;
    }

    /**
     * @param mixed $client_password
     */
    public function setPassword($client_password)
    {
        $this->client_password = $client_password;
    }
}
