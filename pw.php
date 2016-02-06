<?php

$text = file_get_contents('words.txt');
$textArray = explode("\n", $text);
$randArrayIndexNum = array_rand($textArray);
$randPhrase = $textArray[$randArrayIndexNum];
$randArrayIndexNum1 = array_rand($textArray);
$randPhrase1 = $textArray[$randArrayIndexNum1];
$randArrayIndexNum2 = array_rand($textArray);
$randPhrase2 = $textArray[$randArrayIndexNum2];
$randArrayIndexNum3 = array_rand($textArray);
$randPhrase3 = $textArray[$randArrayIndexNum3];
$randArrayIndexNum4 = array_rand($textArray);
$randPhrase4 = $textArray[$randArrayIndexNum4];
$randArrayIndexNum5 = array_rand($textArray);
$randPhrase5 = $textArray[$randArrayIndexNum5];
echo "Your generated password is: ";
echo $randPhrase,$randPhrase1,$randPhrase2,$randPhrase3,$randPhrase4,$randPhrase5;
?>
