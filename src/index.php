<?php

require_once './Model/Carro.php';
// require_once './Model/moto.php';
// instanciando a classe
$hillux = new Carro('Hillux','vermelho', 2023, '120km/h');
// $moto = new moto('Fan 150', 'vermelho','120Km/h', 2023);
// para nao poder acessar um dado diretamente como no exemplo a baixo
// echo "Ano" . $hillux->ano;
// eu irei privar a class Carro dentro do arquivo carro.php
// ate entao era assim:

// class Carro {
//   public string $modelo;
//   public string $cor;
//   public int $ano;
// }

// agora eu consigo acessar a propriedade modelo porque eu criei uma função
// dentro do class carro para acessar ela
// isso tudo para nao quebrar o paradigma do poo
// nao posso acessar um dado de uma classe diretamente, preciso criar metodos
// echo "<br>" . $moto->obterModelo();
// echo "<br>" . $moto->velocidade();
// echo "<br>" . $hillux->obterModelo();
echo print_r($hillux);