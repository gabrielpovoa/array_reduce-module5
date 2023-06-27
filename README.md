ARRAY_KEYS&ARRAY_VALUES

````
ARRAY_KEYS($array) = > gera um novo array, so que com as chaves, elas ficam no lugar dos valores;
return {
   "name",
   "age"... 
}

````
````
ARRAY_VALUES($array) => Faz o mesmo, cria um novo array, porém com nossos valores do array. Gera um array com os valores
return {
    "Joao",
    20...
}
````

EXERCÍCIO: ARRAY NA TABELA
````
<?php
$client = [
    'name' => 'Joao Gabriel',
    'age' => '21',
    'entreprise' => "Gabriel's plant",
    'color' => 'purple',
    'job' => 'Priest',
    'companyCity' => "Alvorada"
];
$onlyKeys = array_keys($client);
$onlyValues = array_values($client);
?>


<table border="4">
    <tr>
        <?php foreach($onlyKeys as $keys) {?>
        <th><?php echo $keys; ?></th>
        <?php } ?>
    </tr>
    
    <tr>
    <?php foreach($onlyValues as $values) {?>
        <td><?php echo $values; ?></td>
        <?php } ?>
    </tr>
</table>
---------------------------------------------------


<?php
$client = ['a','b','c','d','e','f'];

// array_slice, recebe alguns parametros, o array e qts items quer pegar
// 1. o Array / 2. onde começa / 3. quantos quer pegar
//$return = array_slice($client,-1,1); 

$newClient = ["A", "B","C","D"];
array_splice($client, 2,1,$newClient);
//Passa o array, escolhe o que quer apagar pelo index e apaga quantos?
// começa do um e remove apenas um.

foreach($client as $item) {
    echo $item ." <br>";
}
````
