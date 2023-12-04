<?php

$array = [1, 2, 3, 4, 2, 5];
$valueToRemove = 5;

$array = array_diff($array, [$valueToRemove]);

print_r($array);
exit;