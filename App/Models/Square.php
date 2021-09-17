<?php

namespace App\Models;

use App\Interfaces\Shape;

class Square implements Shape {

    private $a;

    public function __construct($a) {
        
        $this->a = $a;
    }

    public function area() {
        return $this->a * $this->a;
    }

    public function circumference() {
        return $this->a * 4;
    }
}