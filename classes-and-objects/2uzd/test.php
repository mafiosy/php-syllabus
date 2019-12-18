<?php

include "2.php";

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

$p1->swap_points($p2);

echo "p1(" . $p1->Xval . ", " . $p1->Yval . ")" . PHP_EOL;
echo "p2(" . $p2->Xval . ", " . $p2->Yval . ")" . PHP_EOL;