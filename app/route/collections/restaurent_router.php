<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 6/9/15
 * Time: 17:09
 */
$restaurant_collection=new \Phalcon\Mvc\Micro\Collection();
$restaurant_collection->setHandler('RestaurantController',true);

// tracking api
$restaurant_collection->post('getRestaurant','getRestaurant');
$restaurant_collection->post('getReviewImages','getReviewImages');

$restaurant_collection->post('searchRestaurant','searchRestaurant');
$restaurant_collection->post('categorySearch','categorySearch');

$restaurant_collection->post('scoreSearch','scoreSearch');
$restaurant_collection->post('getLabels','getLabels');

$restaurant_collection->post('getReviewLabels','getReviewLabels');
$restaurant_collection->post('locationSearch','locationSearch');

$restaurant_collection->post('labelsSearch','labelsSearch');

return $restaurant_collection;