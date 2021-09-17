<?php

require 'autoload.php';

use App\Models\Square;
use App\Models\Circle;
use App\Models\Rectangle;
use App\Models\Triangle;

$x = new Square(3);
echo "Square area is ".$x->area(). " and circumference is ".$x->circumference()."\n";

$r = new Circle(4);
echo "Circle area is ".$r->area(). " and circumference is ".$r->circumference()."\n";

$p = new Rectangle(2, 3);
echo "Rectangle area is ".$p->area(). " and circumference is ".$p->circumference()."\n";

$t = new Triangle(2, 3, 4, 5);
echo "Triangle area is ".$t->area(). " and circumference is ".$t->circumference()."\n";
