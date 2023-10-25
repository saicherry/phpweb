<?php 

class calculation
{
  public $a,$b,$c;
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
$c1->a = 20;
$c1->b = 35;
echo "Sum of it : " . $c1->sum();
echo "<br/>";

$c4 = new calculation();
$c4->a = 60;
$c4->b = 50;
echo "Diff of it : " . $c4->sub(); 



?>