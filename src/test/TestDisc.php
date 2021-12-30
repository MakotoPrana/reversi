<?php

require_once "vendor/autoload.php";

use reversi\Models\Disc;
use reversi\Models\Color;

// インスタンス化(黒石)
$discBlack = new Disc(Color::BLACK);

// 色を表示
echo '黒石:' . $discBlack->getColor();

// インスタンス化(白石)
$discWhite = new Disc(Color::WHITE);

// 色を表示
echo '白石:' . $discWhite->getColor();