<?php
/*
$arquivo = fopen('lista-cursos.txt', 'r');

while(!feof($arquivo)){
    $curso = fgets($arquivo);
    echo $curso;
}

fclose($arquivo);


$arquivo = fopen('lista-cursos.txt', 'r');

$tamanhoArquivo = filesize('lista-cursos.txt'); //contar bit do arquivo

$cursos = fread($arquivo, $tamanhoArquivo);

echo $cursos;

fclose($arquivo);



$cursos = file_get_contents('lista-cursos.txt');

echo $cursos;
*/

$cursos = file('lista-cursos.txt');

var_dump($cursos);

