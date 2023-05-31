<?php

function fibonacci($n) {
    $sequence = array();

    $sequence[0] = 0;
    $sequence[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $sequence[$i] = $sequence[$i-1] + $sequence[$i-2];
    }

    return $sequence;
}


if (isset($_POST['number'])) {
    $input = intval($_POST['number']);
    $fibonacciSequence = fibonacci($input);
}
?>