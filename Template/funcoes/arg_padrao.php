<div class="titulo">Argumento padrão</div>

<?php
function saudacao($nome = "Senhor(a)", $sobrenome = 'Cliente'){
    echo "Bem vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao(NULL);
saudacao(NULL, null);
saudacao('Mestre', "Supremo");

function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Hamburguer', 'Refrigerante');

