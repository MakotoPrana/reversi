<?php

namespace reversi\Models;

use reversi\Models\Color;
use reversi\Models\Disc;

class Square {

    /** 枠はディスクを保有する */
    private $disc = null;

    /**
     * ディスクを置く
     */
    public function putDisc(Disc $disc){
        $this->disc = $disc;
    }

    /**
     * ディスクオブジェクトを取得
     * 
     * ※ディスクがない場合はnullを返す
     */
    public function getDisc(){
        return $this->disc;
    }

    /**
     * ディスクを裏返す
     */
    public function reverseDisc() {

        // 盤面に石がない場合はエラー
        if($this->disc == null) {
            throw new \Exception('石を置いていない枠を裏返すことはできません');
        }

        // ディスクを裏返す
        if($this->disc->getColor() == Color::BLACK) {
            $this->putDisc(new Disc(Color::WHITE));
        } else {
            $this->putDisc(new Disc(Color::BLACK));
        }
    }
}