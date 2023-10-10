<?php
echo '##############問題1################<br>';
function reverse($str) {
    $str = strrev($str);
    return $str;
}
echo reverse("twitter");

echo '##############問題2################<br>';
function getOddChars($str) {
    $oddChars = "";
    for ($i = 0; $i < strlen($str); $i++) {
        if ($i % 2 == 0) {
            $oddChars .= $str[$i];
        }
    }
    return $oddChars;
}
echo getOddChars("まマちリがーいゴさーがルしド");

echo '##############問題3################<br>';
function getAlternateChars($str1, $str2) {
    $alternateChars = "";
    for ($i = 0; $i < strlen($str1); $i++) {
        $alternateChars .= $str1[$i];
        $alternateChars .= $str2[$i];
    }
    return $alternateChars;
}
echo getAlternateChars("まちがいさがし", "マリーゴールド");

?>