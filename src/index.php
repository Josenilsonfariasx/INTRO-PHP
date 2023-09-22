<?php
echo "Oi Josenilson, essa vaga e sua S2";
echo "<br>";
echo "<br>";
echo "Criando array e objetos com php";
echo "<br>";
echo "<br>";

$array = ['1', '2', '3', '4'];

$objeto = [
  'name' => 'Josenilson',
  'last name' => 'Farias',
  'age' => 22,
  'girlfriend' => 'Livian baia'
];

print_r ($array);
echo '<br>';
print_r($objeto);
echo '<br>';
echo '<br>';


echo 'trabahando com desestruturação de objeto';
echo '<br>';
['girlfriend' => $myLove] = $objeto;

echo ($myLove);
echo '<br>';
echo 'trabahando com desestruturação de array';
echo '<br>';
[, ,$three]= $array ;

print_r($three);
echo '<br>';
echo '<br>';

echo 'trabahando com spreed operator do objeto';
echo '<br>';
$moreOneKay = [...$objeto, 'bio' => 'Amo de mais'];

print_r($moreOneKay);
echo '<br>';
echo '<br>';

echo 'trabahando com operadores ternarios';
echo '<br>';


$bool = true;
$result = $bool ? 'Deu certo' : null;
echo($result);

echo '<br>';
echo '<br>';

echo 'trabahando com for para saber o tamanho do array de forma manual';
for($i=0; $i < sizeof($array) ; $i++){
  echo '<br>';
  echo $i . '' ;
}
echo '<br>';
echo '<br>';


echo 'trabahando com forEach somando 1 a cada elemento do array';
foreach( $array as  $value){
  echo '<br>';
  echo ($value+1 . '');
}


echo '<br>';
echo '<br>';

echo 'trabahando com manipulação de array';
echo '<br>';
echo '<br>';

echo 'adicionando elementos';
$array[] = 5;

print_r($array);
echo '<br>';

echo 'removendo elementos e reordenando a lista';
unset($array[0]);
$novoArray = array_values($array);

print_r($novoArray);
echo '<br>';