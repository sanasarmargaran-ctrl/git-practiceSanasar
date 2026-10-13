<?php
function isAdult($age) {
    $age = (int)$age;
    if ($age > 120 || $age < 0) return false;
    return $age >= 18;
}
