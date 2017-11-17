<?php

/**
 * Created by PhpStorm.
 * User: KevTS
 * Date: 16/11/17
 * Time: 11:09 PM
 */

require_once APPPATH . "/libraries/REST_Controller.php";

class Teacher extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Teacher_model", "teacher", true);

    }

    public function index_get()
    {
        $obj = $this->teacher->read($this->get());
        if (!$obj->status) {
            $this->response($obj, 500);
        }

        $this->response($obj);
    }


    public function index_post()
    {

        $obj = $this->post();


        $result = $this->teacher->create($obj);

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

        $result = $this->teacher->update($this->query("id"), $obj);

        if (!$result->status) {
            $this->response($result, 500);
        }

        $result->data = $obj;
        $this->response($result, 200);

    }

    public function index_delete($id)
    {

        $result = $this->teacher->delete($id);
        if (!$result->status) {
            $this->response($result, 500);
        }

        $this->response($result, 200);

    }

}