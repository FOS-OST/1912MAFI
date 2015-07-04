<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 7/3/15
 * Time: 20:39
 */

class UserController extends BaseController {
    public function createSession() {
        $session=new Session();
        return $this->sendResponse($session->session_id);
    }
    public function createUser() {

    }
    public function getUser() {

    }
    public function getUserBySession() {

    }
    public function iniRenewPass() {

    }
}