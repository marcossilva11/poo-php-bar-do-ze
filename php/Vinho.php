<?php
class Vinho extends Bebida{

    private $safra;
    private $tipo;

    //Relavtivo a safra
    public function getSafra(){
        return $this->safra;
    }
    public function setSafra($s){
        $this->safra = $s;
    }

    //Relativo ao tipo
    public function getSafra(){
        return $this->tipo;
    }
    public function setSafra($t){
        $this->tipo = $t;
    }
}
?>