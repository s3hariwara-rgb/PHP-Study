<?php

// 以下の配列をの要素のうち文字数が偶数のもののみ表示するループを書いてください
$fruits = array("Apple", "Banana", "Cherry");

echo mb_strlen("Apple");

for($i = 0; $i < count($fruits); $i++){
    echo mb_strlen("[$i]");
}