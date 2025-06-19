<?php
function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

$number = 17;
if (isPrime($number)) {
    echo "$number là số nguyên tố";
} else {
    echo "$number không phải là số nguyên tố";
}
?>
