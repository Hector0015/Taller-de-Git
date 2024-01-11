<?php
//Autor: Sergio Gómez <alufog5923@ieselcaminas.org>
//El nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";
