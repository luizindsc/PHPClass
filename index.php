<?php
    $senhaUsuario = "";
    $senhaPadrao = "123456";

   while ($senhaUsuario != $senhaPadrao) {
       $senhaUsuario = readline("Digite sua senha do usuario: ");

       if ($senhaUsuario != $senhaPadrao) {
           echo "Senha invalida.";
       }
   }
echo "Você entrou!";
