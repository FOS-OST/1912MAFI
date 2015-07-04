<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 7/4/15
 * Time: 19:03
 */

class News {
    public function makeNew() {
        return array(
            "id"=>"id",
            "idUser"=>"idUser",
            "url"=>"url",
            "title"=>"title",
            "mainImg"=>"mainImg",
            "ext"=>"ext",
            "type"=>"type",
            "date"=>"date",
            "category"=>"category",
            "text"=>"text"
        );
    }
    public function makeNewItem() {
        return array(
            "id"=>"id",
            "idUser"=>"idUser",
            "url"=>"url",
            "title"=>"title",
            "text"=>"text",
            "mainImg"=>"mainImg",
            "img2"=>"img2",
            "imgFooter"=>"imgFooter",
            "quote"=>"quote",
            "type"=>"type",
            "date"=>"date",
            "category"=>"category",
            "relatedRestaurants"=>array(

            ),
            "imgs"=>array(),
            "list"=>array(),
            "labels"=>array()
        );
    }
}