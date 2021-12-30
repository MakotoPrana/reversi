<?php

namespace reversi\Models;

/**
 * オセロの石（ディスク状）
 */
class Disc {
    private $color;

    public function __construct(string $color){
        $this->color = $color;
    }

    /**
     * 石の色を取得する
     */
    public function getColor(){
        return $this->color;
    }
}