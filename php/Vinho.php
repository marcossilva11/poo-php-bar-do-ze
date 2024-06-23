<?php
require_once 'Bebida.php';
class Vinho extends Bebida{

    private $safra;
    private $tipo;

    //Relavtivo a safra
    public function getSafra(){
        return $this->safra;
    }
    public function setSafra($saf){
        $this->safra = $saf;
    }

    // relativo ao tipo
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
}
?>
