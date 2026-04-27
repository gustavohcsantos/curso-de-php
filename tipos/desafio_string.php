<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string, qual
// é o método que pegará a posição do texto 'abc' na
// string '!AbcaBcabc' retorna 1?

$string = '!AbcaBcabc';
$findme = 'abc';
$position = stripos($string, $findme);

echo "A string 'abc' foi encontrada em $string e existe na posição $position. ";