<?php
$Pessoas = [
    ['nome' => 'João','sexo' => 'M','nota' => 8],
    ['nome' => 'Maria','sexo' => 'F','nota' => 7.5],
    ['nome' => 'Pedro','sexo' => 'M','nota' => 9.2],
    ['nome' => 'Ana','sexo' => 'F','nota' => 6.8],
    ['nome' => 'Carlos','sexo' => 'M','nota' => 7.2],
    ['nome' => 'Laura','sexo' => 'F','nota' => 8.5]
];

//Total de Homens
function contar_m($subtotal,$item) {
    if($item['sexo'] === 'M') {
        $subtotal++;
    }
    return $subtotal;
}

//Nota total de homens
function somar_nota($subtotal, $item)
{
    if($item['sexo'] === 'M') {
        $grade = $item['nota'];
        return $subtotal +=$grade;
    }
    return $subtotal;
}

//Calcualr Média dos homens;


$total_m = array_reduce($Pessoas, 'contar_m');
$total_m_nota = array_reduce($Pessoas, 'somar_nota');

$media_m = number_format($total_m/$total_m_nota, 2);

echo "TOTAL DE HOMENS NA LISTA: ". $total_m."<br>";
echo "TOTAL DE NOTA DOS HOMENS: ".$total_m_nota."<br>";
echo "A MÉDIA DAS NOTAS DOS HOMENS É DE: ".$media_m;