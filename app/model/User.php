<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 7/4/15
 * Time: 17:07
 */

class User {
    public function makeNew() {
        return array(
            "id"=>"11111111",
            "nombre"=>"nombre",
            "nick"=>"nick",
            "img"=>"img",
            "email"=>"email",
            "lang"=>"lang",
            "location"=>"location",
            "phone"=>"phone",
            "sendInfo"=>true,
            "critic"=>1,
            "premium"=>0,
            "premiumExpires"=>time()
        );
    }
}