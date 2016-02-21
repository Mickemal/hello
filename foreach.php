<?php


$maxKey = null;
$maxLenght = null;

foreach ($_SERVER as $key => $value) {
    htmlentities(print_r($key . " = " . strlen($value) . "<br>"));
}

$len = strlen($value);
if ($len > $maxLenght) {
    $maxLength = $len;
    $maxKey = $key;
}

?>

</pre>
<p>The Key with the highest value in $_SERVER is: <?= htmlentities(print_r($len)); ?><p>

</pre>
