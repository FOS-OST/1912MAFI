<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 5/29/15
 * Time: 14:16
 */
$user_collection=new \Phalcon\Mvc\Micro\Collection();
$user_collection->setHandler('UserController',true);

$user_collection->post('createSession','createSession');
$user_collection->post('createUser','createUser');

$user_collection->post("getUser",'getUser');

$user_collection->post('getUserBySession','getUserBySession');

$user_collection->post('iniRenewPass','iniRenewPass');

return $user_collection;

