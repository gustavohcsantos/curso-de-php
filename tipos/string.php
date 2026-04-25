<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// Concatenação
echo ("Nós também" . ' somos');
echo '<br>', "Também aceito", " vírgulas";
echo '<br>';

echo "'Teste'" . " " . '"Teste"' . " " . '\'Teste\'' . " " . "\"Teste\"" . " " . "\\";

print("<br>Também existe a função print");
print("<br>Também existe a função print");

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
// echo '<br>' . ucwords('Gustavo henrique'); // Ótimo pra formulário
echo '<br>' . strlen('Quantas letras?') . ' letras';
echo '<br>' . mb_strlen('Eu também', 'utf-8') . ' letras';
echo '<br>' . substr('Só uma parte mesmo', 7, 6);// Segundo parâmetro (7) indica o início e o terceiro parâmetro (6) indica até onde deseja capturar a string
echo '<br>' . substr('Só uma parte mesmo', 7); // Se não tiver o terceiro parâmetro ele pegará toda a string a partir do seu início
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); // Procure a primeira palavra (isso) e substitua pela segunda palavra (aquilo) dentro da stringe no terceiro parâmetro (Trocar isso)
