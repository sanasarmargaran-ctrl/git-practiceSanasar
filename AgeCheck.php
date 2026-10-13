<?php
function isAdult($age) {
    $age = (int)$age;
    if ($age > 120) return false;
    return $age <= 18;
}
// run check
