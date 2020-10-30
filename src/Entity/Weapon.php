<?php
  namespace App\Entity;

  class Weapon {
    public static $list=[];
    private $name;
    private $degat;
    private $description;

    public function __construct($name, $degat, $description){
      $this->name=$name;
      $this->degat=$degat;
      $this->description=$description;
      self::$list[]=$this;
    }

    public function getName(){return $this->name;}
    public function getDegat(){return $this->degat;}
    public function getDescription(){return $this->description;}


    public static function getDetail($name){
      foreach (self::$list as $weapon) {
        if (strtolower($weapon->name)===strtolower($name)) {
          return $weapon;
        }
      }
    }

    public function createWeapons(){
      new Weapon("arc", 5, "Un arc agile");
      new Weapon("epee", 8, "Une épée légendaire");
      new Weapon("hache", 15, "Une hache tranchante");
    }
  };
?>