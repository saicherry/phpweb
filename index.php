<?php 

class calculation
{
  public $a,$b,$c;
  public $name, $age;

  public function __construct($name = "Name required or Sample Name",$age = 0){
    $this->name = $name;
    $this->age = $age;
  }
  function sum(){
    $this->c = $this->a + $this->b;
    return $this->c;
  } 

  function sub(){
    $this->c = $this->a - $this->b;
    return $this->c;
  }
 

}

$c1 = new calculation();
$c1->name = "saicarhsan";
$c1->age = 25;
$c1->a = 20;
$c1->b = 35;
echo "Sum of it : " . $c1->sum();
echo "<br/>";

$c4 = new calculation();
$c4->a = 60;
$c4->b = 50;
echo "Diff of it : " . $c4->sub(); 
echo "<br/>";

echo "Name & Age : " . $c1->name . " - " . $c1->age;


?>