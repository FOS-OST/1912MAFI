<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 7/4/15
 * Time: 17:07
 */

class Restaurant {
    public function makeNew($id) {
        return array(
            "id"=>$id,
            "idCritic"=>"idCritic",
            "restaurant"=>"restaurant",
            "direccion"=>"direccion",
            "vivencias"=>"vivencias",
            "precioMedio"=>"precioMedio",
            "parkingDireccion"=>"parkingDireccion",
            "parkingHorario"=>"parkingHorario",
            "hCocina"=>"hCocina",
            "precioMenu"=>"precioMenu",
            "capacidadPrivados"=>"capacidadPrivados",
            "telf"=>"telf",
            "email"=>"email",
            "web"=>"web",
            "coordX"=>"coordX",
            "coordY"=>"coordY",
            "url"=>"url",
            "imgPrincipal"=>"imgPrincipal",
            "scores"=>array(

            ),
            "etiquetas"=>array(),
            "relatedNews"=>array()
        );
    }
    public function makeSearchResult() {
        return array(
            'restaurant'=>"restaurant",
            "url"=>"url",
            "comida"=>"comida",
            "decoracion"=>"decoracion",
            "servicio"=>"servicio",
            "precio"=>"precio",
            "img"=>"img",
            "ext"=>"ext"
        );
    }
    public function makeRelative() {
        return array(
            "id"=>"id",
            "restaurant"=>"restaurant",
            "ext"=>"ext",
            "url"=>"url"
        );
    }

}
