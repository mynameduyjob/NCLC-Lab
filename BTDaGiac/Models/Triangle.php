<?php
class Triangle extends Polygon {
    public $triHeight;

    public function __construct($Sides) {
        parent::__construct($Sides);
    }

    public function Perimeter() {
        $Sides1= $this -> Sides1;
        $Sides2= $this -> Sides2;
        $Sides3= $this -> Sides3;
        return $Sides1 + $Sides2 + $Sides3;
    }

    public function Area() {
        $a = $this -> Sides3;
        $triHeight = $this -> triHeight;
        return (1/2) * $a * $triHeight;
    }

}
$Sides = [3,7,5];
$Triangle = new Triangle($Sides);
echo "Chu vi tam giác:" . $Triangle->Perimeter(). ",\n";
echo "Diện tích tam giác:" . $Triangle->Area(). "\n";
?>