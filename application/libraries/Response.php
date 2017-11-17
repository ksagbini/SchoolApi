<?php

/**
 * Created by PhpStorm.
 * User: KevTS
 * Date: 26/04/17
 * Time: 9:41 PM
 */
class Response
{

    public $status;
    public $data;
    public $message;

    /**
     * Response constructor.
     * @param $status
     * @param $data
     * @param $message
     */
    public function __construct($status = false, $data = null, $message = "")
    {
        $this->status = $status;
        $this->data = $data;
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


}