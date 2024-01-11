<?php
//Autor: Sergio Gómez <alufog5923@ieselcaminas.org>
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
?>
