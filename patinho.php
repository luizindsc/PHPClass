<?php
$nPatinhos = (int) readline("Digite o número de patinhos: ");
$nPatinhosIncial = $nPatinhos;

while ($nPatinhos > 0) {
    // Imprime a música para o número atual de patinhos
    echo "\n";
    echo "$nPatinhos patinhos foram passear, \n";
    echo "além das montanhas para brincar \n";
    echo "A mamãe gritou: Quack, quack, quack, quack \n";

    // Verifica se é o último patinho
    if ($nPatinhos == 1) {
        echo "Mas nenhum patinho voltou de lá \n";
    } else {
        echo "Mas só " . ($nPatinhos - 1) . " voltaram de lá \n";
    }

    // Decrementa o número de patinhos
    $nPatinhos--;

    // Quando não houver mais patinhos, imprime a história final
    if ($nPatinhos == 0) {
        echo "\n";
        echo "Poxa, a mamãe patinha ficou tão triste naquele dia \n";
        echo "Aonde será que estavam os seus filhotinhos? \n";
        echo "Mas essa história vai ter um final feliz \n";
        echo "Sabe por quê? \n";
        echo "A mamãe patinha foi procurar \n";
        echo "Além das montanhas na beira do mar \n";
        echo "A mamãe gritou: Quack, quack, quack, quack \n";
        echo "E os $nPatinhosIncial patinhos voltaram de lá \n";
    }
}
?>
