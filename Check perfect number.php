<?php
$n = 28;
$sum = 0;
for ($i = 1; $i < $n; $i++) {
    if ($n % $i == 0) {
        $sum += $i;
    }
}
if ($sum == $n) {
    echo "$n là số hoàn hảo";
} else {
    echo "$n không phải là số hoàn hảo";
}
?>
