<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 7/4/15
 * Time: 18:59
 */

class Label {
    private  $ids=array("1111","2222","3333","4444","5555","6666","7777","8888","9999");
    private $tipos=array("LIST","SN","10");
    private $tipoLabel=array("goodFor","dayOpen","attribute");
    public function makeNew() {
        return array(
            "id"=>$this->ids[array_rand($this->ids,1)],
            "tipo"=>$this->tipos[array_rand($this->tipos,1)],
            'tipoLabel'=>$this->tipoLabel[array_rand($this->tipoLabel,1)],
            'premium'=>"1"
        );
    }
}