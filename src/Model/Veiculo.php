<?php

abstract class Veiculo {
  public function __construct(
    protected string $modelo, 
    protected string $cor, 
    protected string $velocidade, 
    protected string $ano
  ){
  }
  abstract public function obterModelo();
  abstract public function obterCor();
  abstract public function alterarCor(string $cor);

}