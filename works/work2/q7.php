<?php

// 各人の得点とその評価を表示するコードを書いてください。評価基準は以下とします:
// 90以上: "優"
// 80以上90未満: "良"
// 70以上80未満: "可"
// 70未満: "不可"

// 出力例 「johnの評価は良です」

$scores = array("John" => 85, "Jane" => 92, "Jim" => 78);

foreach ($scores as $hari){
    if($hari >= 90){
        echo "優\n";
    }
    if($hari >= 80 & $hari < 90){
        echo "良\n";
    }
    if($hari >= 70 & $hari < 80){
        echo "可\n";
    }
    if($hari < 70){
        echo "不可\n";
    }
}