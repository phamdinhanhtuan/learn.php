<?php
$arr = array(1, 2, 3, 4, 5);
$sum = 0;
foreach ($arr as $value) {
    echo $value . " ";
    $sum += $value;
}
echo "<br>Tổng các phần tử là: $sum";
?>
