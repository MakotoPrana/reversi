<?php

namespace Models;

class Disc {
    private $color;

    public function __construct(string $color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
}