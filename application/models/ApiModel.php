<?php

/**
 * Created by PhpStorm.
 * User: KevTS
 * Date: 25/04/17
 * Time: 10:59 PM
 */

require_once APPPATH . "/libraries/Response.php";

class ApiModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Get result from a database query
     * @param $query
     * @return stdClass
     */
    public function getQueryResult($query)
    {
        if ($query) {
            return new Response(true, $query->result());
        } else {
            return new Response(false, null, "CODE: " . $this->db->_error_number() . ' MSG: ' . $this->db->_error_message());
        }
    }


    /**
     * Execute the transaction query and return the last insert table id
     * @return null|Response
     */
    public function getTransactionResult()
    {

        $result = null;

        if ($this->db->trans_status()) {
            $result = new Response(true, $this->db->insert_id());
            $this->db->trans_commit();
        } else {
            $result = new Response(false, null, "CODE: " . $this->db->_error_number() . ' MSG: ' . $this->db->_error_message());
            $this->db->trans_rollback();
        }

        return $result;

    }


}