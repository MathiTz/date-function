<?php


// $ts =  strtotime("2001-09-11"); transforma em timestomp (marco zero);
$ts =  strtotime("+1 day"); // posso modificar com minhas proprias  preferências

echo date("l, d/m/Y", $ts);