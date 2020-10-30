<?php
  namespace App\Entity;

  class Character {
    public static $characters=[];
    public $name;
    public $age;
    public $isMale;
    public $attributes =[];

    public function __construct($name, $age, $isMale, $attributes){
      $this->name=$name;
      $this->age=$age;
      $this->isMale=$isMale;
      $this->attributes=$attributes;
      self::$characters[]=$this;
    }

    public static function createCharacters(){
      $p1=new Character('Marc', 25, true, [
        "strength"=>7,
        "agility"=>5,
        "wisdow" =>2
      ]);
      $p2=new Character('Milo', 288, true, [
        "strength"=>2,
        "agility"=>3,
        "wisdow" =>9
      ]);
      $p3=new Character('Tya', 18, false, [
        "strength"=>3,
        "agility"=>8,
        "wisdow" =>3
      ]);
    }
    public function getDetail($name){
      foreach (self::$characters as $character) {
        if (strtolower($character->name)===strtolower($name)) {
          return $character;
        };
      };
    }
  }
?>