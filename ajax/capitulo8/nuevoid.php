<?php

$valorid = $_POST["vid"];
$valorgrupo = $_POST["vgrupo"];

if ($valorid < $valorgrupo) {
    $nazar = rand(($valorid * 2), ($valorgrupo * 3));
} else {
    $nazar = rand(($valorgrupo * 2), ($valorid * 3));
}
echo($valorid . "-" . $nazar . "-" . $valorgrupo);
