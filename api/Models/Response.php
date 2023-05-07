<?php
class Response {
    private $data = array();

    public function __construct(){
        $this->data['status'] = 'SUCCESS';
        $this->data['message'] = 'API is running OK!!';
    }


    public function add_do_data($results){
        $this->data['data'] = $results;
    }

    public function error_response($error){
        $this->data['status'] = 'ERROR';
        $this->data['message'] = $error;
        $this->send_api_response();
        die(1);
    }

    public function send_api_response(){
        header("Content-type:application/json");
        echo json_encode($this->data);
        die(1);
    }

}