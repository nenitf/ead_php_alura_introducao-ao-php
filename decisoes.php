<?php

$idade = 17;
// $idade = 18;
// $idade = 19;

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}
echo "Você só tem $idade anos. Você não pode entrar";
