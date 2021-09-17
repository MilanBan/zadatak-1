<?php

namespace App\Models;

use App\Interfaces\Shape;

class Rectangle  {

    private $a;
    private $b;

    public function __construct($a, $b) {
        
        $this->a = $a;
        $this->b = $b;
    }

    public function area() {
        return $this->a * $this->b;
    }

    public function circumference() {
        return ($this->a + $this->b) * 2;
    }
}