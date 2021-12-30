<?php

require_once "vendor/autoload.php";

use reversi\Models\Disc;
use reversi\Models\Color;
use reversi\Models\Square;

// インスタンス化(黒石)
$discBlack = new Disc(Color::BLACK);

// 色を表示
echo '黒石:' . $discBlack->getColor();

// 枠を生成
$square = new Square();

// 黒石を置く
$square->putDisc($discBlack);

// 置かれた石の色を確認
echo '枠に置かれている石の色' . $square->getDisc()->getColor();

echo 'ディスクを裏返す';
$square->reverseDisc();

// 置かれた石の色を確認
echo '枠に置かれている石の色' . $square->getDisc()->getColor();
