<?php 

class Prodotto{
    public $name;
    public $img;
    public $price;

     public function __construct($name,$img,$prezzo){
        $this->name=$name;
        $this->img=$img;
        $this->price=$prezzo;
    } 

}