<?php

/**
 * Created by PhpStorm.
 * User: KevTS
 * Date: 16/11/17
 * Time: 11:10 PM
 */
require_once APPPATH . "/models/ApiModel.php";

class Teacher_model extends ApiModel
{
    private $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = "teachers";

    }


    public function read($params = null)
    {
        $query = $params > 0 ? $this->db->get_where($this->_table, $params) :
            $this->db->get($this->_table);

        return $this->getQueryResult($query);
    }


    public function create($params)
    {
        $this->db->trans_begin();
        $this->db->insert($this->_table, $params);
        return $this->getTransactionResult();
    }


    public function update($id, $params)
    {
        $this->db->trans_begin();
        $this->db->where("id", $id);
        $this->db->update($this->_table, $params);
        return $this->getTransactionResult();
    }

    public function delete($id)
    {
        $this->db->trans_begin();
        $query = $this->db->delete($this->_table, ["id" => $id]);
        return $this->getTransactionResult();
    }
}