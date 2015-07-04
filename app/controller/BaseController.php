<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 7/4/15
 * Time: 17:10
 */

class BaseController extends \Phalcon\Mvc\Controller {
    public function onConstruct() {

    }
    public  function sendJsonResponse($result) {
        $this->response->setContentType("application/json",'UTF-8');
        $json=json_encode($result);
        $this->response->setContent($json);
        return $this->response;
    }
    public function sendResponse($result) {
        $this->response->setContent($result);
        return $this->response;
    }
}