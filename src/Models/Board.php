<?php

namespace reversi\Models;

use reversi\Models\Color;
use reversi\Models\Disc;
use reversi\Models\Square;

/**
 * 盤面
 * 
 * オセロのボード
 * 8✕8 64個の枠を保持する
 */
class Board {
    private $squares;

    public function __construct(){

        // 枠を生成（すべて空欄）
        $this->generateSquares();
    }

    /**
     * 枠を盤面上に生成する
     */
    private function generateSquares(){
        // todo:どこかで初期化処理
        
        // 8×8の形に枠を生成
        for($row = 0; $row < 8; $row++) {
            for($col = 0; $col < 8; $col++) {
                $this->squares[$row][$col] = new Square();
            }
        }
    }

    /**
     * ボードのデータを生のまま出力
     */
    public function getSquares() {
        return $this->squares;
    }

    /**
     * ボードのデータを整形して出力
     * 
     * @return array 0:未配置 1:黒石 2:白石
     */
    public function getSquaresStatus() {
        $squares = [];
        
        // 配列の状態に変換
        for($row = 0; $row < 8; $row++) {
            for($col = 0; $col < 8; $col++) {
                $disc = $this->squares[$row][$col]->getDisc();

                if (is_null($disc)) {
                    $squares[$row][$col] = 0;
                    continue;
                }

                $squares[$row][$col] = $disc->getColor();
            }
        }

        return $squares;
    }
}