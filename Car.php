
<?php
class Car {
    public $name;
    public $color;
    public $price;
    private $condition;

    public function __construct($name,$color,$price)

{
      $this->name=$name;
      $this->color=$color;
      $this->price=$price;

    }


   public function setCondition($condition)
   
   {
     $this->condition=$condition;
  }
  public function getCondition(){
     return  $this->condition;
  }
}
