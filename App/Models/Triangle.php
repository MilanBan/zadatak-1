<?php

namespace App\Models;

use App\Interfaces\Shape;

class Triangle  {

    private $a;
    private $b;
    private $c;
    private $h;

    public function __construct($a, $b, $c, $h) {
        
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->h = $h;
    }

    public function area() {
        return $this->a * $this->h * 0.5;
    }

    public function circumference() {
        return $this->a + $this->b + $this->c;
    }
}