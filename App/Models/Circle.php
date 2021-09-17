<?php 

namespace App\Models;

use App\Interfaces\Shape;

class Circle implements Shape {

    private $r;

    public function __construct($r) {
        
        $this->r = $r;
    }

    public function area() {
        return ($this->r * $this->r) * 3.14;
    }

    public function circumference() {
        return (2 * $this->r) * 3.14;
    }
}