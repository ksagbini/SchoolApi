<?php

/**
 * Created by PhpStorm.
 * User: KevTS
 * Date: 16/11/17
 * Time: 10:29 PM
 */
require_once APPPATH . "/libraries/REST_Controller.php";

class Student extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("student_model", "student", true);

    }

    public function index_get()
    {
        $obj = $this->student->read($this->get());
        if (!$obj->status) {
            $this->response($obj, 500);
        }

        $this->response($obj);
    }


    public function index_post()
    {

        $obj = $this->post();


        $result = $this->student->create($obj);

        if (!$result->status) {
            $this->response($result, 500);
        }

        $obj["id"] = $result->data;
        $this->response(new Response(true, $obj), 201);

    }


    public function index_put()
    {

        $obj = $this->put();
        $obj["id"] = $this->query("id");

        $result = $this->student->update($this->query("id"), $obj);

        if (!$result->status) {
            $this->response($result, 500);
        }

        $result->data = $obj;
        $this->response($result, 200);

    }

    public function index_delete($id)
    {

        $result = $this->student->delete($id);
        if (!$result->status) {
            $this->response($result, 500);
        }

        $this->response($result, 200);

    }




}