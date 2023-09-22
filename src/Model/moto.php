<!-- <?php
require_once "Carro.php";
// extendendo classe carro para moto para poder aproveitar metodos e atributos
class Moto extends Carro {
  private string $velocidade;

  public function __construct(string $modelo, string $cor, string $velocidade, string $ano) {
    parent::__construct($modelo, $cor, $ano);
    $this->velocidade = $velocidade;
  }
  public function velocidade(){
    return $this->velocidade;
  }

} -->