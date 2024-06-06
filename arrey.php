<?php
// criação de uma array
$produtos = [
    "maça" => 2.30,
    "uva" => 1.99,
    "laranja" => 2.99
];

// exibir os preços da lista
echo "Lista de preços:\n";
foreach ($produtos as $produto => $preco) {
    echo $produto . " custa R$" . $preco . "\n";
}

// calculando o total
$total = 0;
foreach ($produtos as $preco) {
    $total += $preco;
}
echo "Total: R$" . $total;
?>
