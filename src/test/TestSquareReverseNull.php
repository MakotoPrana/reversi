<?php

require_once "vendor/autoload.php";

use reversi\Models\Square;

// 枠を生成
$square = new Square();

echo 'ディスクを裏返す';
$square->reverseDisc();

// 例外発生