<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 5/29/15
 * Time: 14:37
 */
$collections = array();
$collectionFiles = scandir(dirname(__FILE__) . '/collections');
foreach($collectionFiles as $collectionFile){
    $pathinfo = pathinfo($collectionFile);
    //Only include php files
    if($pathinfo['extension'] === 'php'){
        // The collection files return their collection objects, so mount
        // them directly into the router.
        $collections[] = include(dirname(__FILE__) .'/collections/' . $collectionFile);
    }
}
return $collections;