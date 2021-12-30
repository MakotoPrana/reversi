<?php

require_once "vendor/autoload.php";

use reversi\Models\Board;

// 盤面を生成
$square = new Board();
print_r($square->getSquaresStatus());

