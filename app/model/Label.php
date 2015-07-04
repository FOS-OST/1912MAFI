<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 7/4/15
 * Time: 18:59
 */

class Label {
    private  $ids=array("1111","2222","3333","4444","5555","6666","7777","8888","9999");
    public function makeNew() {
        return array(
            "id"=>array_rand(array($this->ids),1),
            "tipo"=>array_rand(array("LIST","SN","10"),1),
            'tipoLabel'=>array_rand(array("goodFor","dayOpen","attribute"),1),
            'premium'=>"1"
        );
    }
}