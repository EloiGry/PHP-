<?php 
function palindrome($string) {
 $lower = strtolower($string);
 $res = strrev($lower);
 if ($res === strtolower($string)) {
    echo 'c\'est un palindrome';
 } else {
    echo 'ce n\'est un palindrome';
 }
}

palindrome('kayac');
