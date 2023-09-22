<?php
require_once 'Veiculo.php';
class Carro extends Veiculo {  
  // criando construtor para chamar a classe e instaciar
  public function __construct( 
  string $modelo,
  string $cor,
  string $ano,
  string $velocidade){
    parent ::__construct($modelo, $cor, $ano, $velocidade);
  }
  public function obterModelo() {
    return $this->modelo;
  }
  public function obterCor(){
    return $this->cor;
  }
  public function alterarCor(string $cor){
    return $this->$cor = $cor;
  }
}