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

$c5->show();




class employee{
  public $name,$age,$salary;
  public function __construct($n,$a,$s){
    $this->name = $n;
    $this->age = $a;
    $this->salary = $s;
  }

  function showInfo(){
   echo "<table border='2'>";
    echo "<th>Employee Profile</th>";
    echo "<tr><td>$this->name</td></tr>";
    echo "<tr><td>$this->age</td></tr>";
    echo "<tr><td>$this->salary</td></tr>";
    echo "</table>"."";
   // echo "".$this->name." - ".$this->age." - " .$this->salary;
  }
}


class manager extends employee{
  public $department,$company,$location;

  public function __construct($n,$a,$s,$d,$c,$l){
    $this->name = $n;
    $this->age = $a;
    $this->salary = $s;
    $this->department = $d;
    $this->company = $c;
    $this->location = $l;
  }

  public function showInfo(){
    
    echo "<table border='2'>";
    echo "<th>Manager Profile</th>";
    echo "<tr><td>$this->name</td></tr>";
    echo "<tr><td>$this->age</td></tr>";
    echo "<tr><td>$this->salary</td></tr>";
    echo "<tr><td>$this->department</td></tr>";
    echo "<tr><td>$this->company</td></tr>";
    echo "<tr><td>$this->location</td></tr>";
    echo "</table>"; 
   }
}



$emp = new employee("saicharan",25,25050);
$empManager = new manager("sai",26,58426,"HR","FUNBERRY","BANGALORE");
echo "<br/>";
$emp->showInfo();
echo "<br/>";

$empManager->showInfo();



?>