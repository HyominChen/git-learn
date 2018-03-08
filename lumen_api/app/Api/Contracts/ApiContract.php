<?php

namespace App\Api\Contracts;

interface ApiContract
{

    // try to get a file obj
    public function file($key);

    // try to get a form param;
    public function input($key);
    
    //try to get all request params
    public function all();

    //try to get some param and auto exit
    public function checkParams($params = [], $exp = [], $formate = [], $message = []);

    //try to get one param
    public function getParam($param);
    
    //try to get some params
    public function getParams($params = [], $exp = [], $formate = [], $message = []);
    
    // return a message
    public function message($result, $message, $datas = []);

    //return a success message
    public function success($message = "success");

    //return a error message
    public function error($message = "error");

    //return paginate datas
    public function paginate($paginate, $message = "paginate");

    //reutrn some datas and can be empty
    public function datas($datas, $message = "get datas success");

    //return one data and can not be empty
    public function data($datas, $success = "get datas success", $error = "get datas failed");

    //return insert message
    public function insert_message($insert_id, $success = "insert success", $error = "insert error");

    //return delete message
    public function delete_message($delete_result, $success = "delete success", $error = "delete error");

    //return update message
    public function update_message($update_result, $success = "update success", $error = "update error");
}
