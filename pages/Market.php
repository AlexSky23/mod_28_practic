<?php
class Market {
    public function SetTov(){}
    public function GetTov($a1){}
}

class Tovar extends Market {
    public $tov = [];
    public $itog = "";
    public function GetTov($a1){
        foreach ($this->tov[$a1] as $value) {
            echo $value;
        }
    }
    public function Skidka(){
        return rand(5, 20);
    }
    
}
$tovar = new Tovar();

class Dostavka {
    public $opt = array("name"=>"transportnaja kompania", "cost"=>35);
    public $roznica = array("name"=>"Pochta", "cost"=>20);
}
$dostavka = new Dostavka();

$tovar->tov = array(
    array("name"=>"pencil", "pcs."=>5, "color"=>"red", "cost"=>10),
    array("name"=>"pencil", "pcs."=>13, "color"=>"black", "cost"=>11),
    array("name"=>"pen", "pcs."=>55, "color"=>"blue", "cost"=>8),
    array("name"=>"pen", "pcs."=>34, "color"=>"green", "cost"=>8),
    array("name"=>"erka", "pcs."=>22, "color"=>"white", "cost"=>3),
    array("name"=>"paper", "pcs."=>0, "color"=>"red", "cost"=>33),
    array("name"=>"paper", "pcs."=>18, "color"=>"white", "cost"=>26),
    array("name"=>"paper clip", "pcs."=>0, "color"=>"black", "cost"=>2)
    );
?>