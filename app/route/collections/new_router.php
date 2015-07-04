<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 7/3/15
 * Time: 20:39
 */
$new_collection=new \Phalcon\Mvc\Micro\Collection();
$new_collection->setHandler('NewController',true);

// tracking api
$new_collection->post('getNews','GetNews');
$new_collection->post('getNewsItem','GetNewsItem');

return $new_collection;