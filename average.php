<?php
function average($arr) {
    if (count($arr) == 0) return 0;
    return array_sum($arr) / count($arr);
}
$arr = [5, 7, 9, 3, 8];
echo "Trung bình cộng là: " . average($arr);
?>
