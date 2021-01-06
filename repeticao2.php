<?php

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        continue; // pula para proxima iteração
        // break; // trava iteração e não o começa as seguintes
    } 
    echo "#$contador" . PHP_EOL;
}

