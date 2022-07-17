<?php
/*

$arquivo = fopen('cursos-php.txt', 'a');

$cursos = "\nDesign Patterns PHP II: Boas práticas de programação";


fwrite($arquivo, $cursos);

fclose($arquivo);

*/

$curso = "\nDesign Patterns PHP IIII: Boas práticas de programação";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND);