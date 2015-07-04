<?php

use Phalcon\Loader;
use Phalcon\Tag;
use Phalcon\Mvc\Url;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;

try {
    date_default_timezone_set("UTC");
    //$config= include('../app/Config/config.php');

    // Register an autoloader
    $loader = new Loader();

    $class=require_once __DIR__."/../vendor/autoload.php";

    $loader->registerDirs(array(
        array(
            '../app/controller/',
            '../app/model/'
        )
    ))->register();


    $loader->register();


   // $redis=new Redis();
    //$redis->open($config->redis->host,$config->redis->port);

    $di=new FactoryDefault();

    //$di->set('config',$config);

    $app=new \Phalcon\Mvc\Micro($di);

    $app->get('/',function() use ($app){
        echo "Welcome";

    });

    $app->post('/getNews',function() use ($app) {

    });
    $app->post('/getNewsItem',function() use ($app) {

    });


    $app->post('/createSession',function() use ($app) {
        $session=new Session();
        $result=array('sessionId'=>$session->session_id);

        $app->response->setContentType("application/json",'UTF-8');
        $app->response->setJsonContent($result);

        return $app->response;
    });
    $app->post('/createUser',function() use ($app) {
        $app->response->setContent(0);
        return $app->response;
    });
    $app->post('/getUser',function() use ($app) {
        $user=(new User())->makeNew();
        $app->response->setContentType("application/json",'UTF-8');
        $app->response->setJsonContent($user);
        return $app->response;
    });
    $app->post('/getUserBySession',function() use ($app) {
        $user=(new User())->makeNew();
        $app->response->setContentType("application/json",'UTF-8');
        $app->response->setJsonContent($user);
        return $app->response;
    });
    $app->post('/iniRenewPass',function() use ($app) {
        $app->response->setContentType("application/json",'UTF-8');
        $app->response->setJsonContent(array());
        return $app->response;
    });

    $app->post('/saveUser',function() use ($app) {
        $app->response->setContent(1);
        return $app->response;
    });


    $app->post('/getRestaurant',function() use ($app) {

    });
    $app->post('/getReviewImages',function() use ($app) {

    });
    $app->post('/searchRestaurant',function() use ($app) {

    });
    $app->post('/categorySearch',function() use ($app) {

    });
    $app->post('/scoreSearch',function() use ($app) {

    });
    $app->post('/getLabels',function() use ($app) {

    });
    $app->post('/getReviewLabels',function() use ($app) {

    });
    $app->post('/locationSearch',function() use ($app) {

    });
    $app->post('/labelsSearch',function() use ($app) {

    });

    $app->handle();

} catch (Exception $e) {

    $response = new \Phalcon\Http\Response();
    $response->setContent(json_encode(array('error' =>
        array('message' => $e->getMessage(), 'code' => $e->getCode()))));
    $response->setContentType("application/json");
    $response->setStatusCode(500);
    return $response->send();

}