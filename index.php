<?php 

class calculation
{
  public $a,$b,$c;
  public $name, $age;

  public function __construct($name = "Name required or Sample Name",$age = 0){
    $this->name = $name;
    $this->age = $age;
  }

  function show(){
    echo "Name & Age : ".$this->name." - ".$this->age."!";
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

$c5 = new calculation("sai",29);
$c1 = new calculation();
// $c1->name = "saicharan";
// $c1->age = 25;
$c1->a = 20;
$c1->b = 35;
echo "Sum of it : " . $c1->sum();
echo "<br/>";

$c4 = new calculation();
$c4->a = 60;
$c4->b = 50;
echo "Diff of it : " . $c4->sub(); 
echo "<br/>";

echo $c5->show();


?>