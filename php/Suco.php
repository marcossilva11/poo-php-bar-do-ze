<?php
class Suco extends Bebida{

    private $sabor;

    public function getSabor(){
        return $this->sabor;
    }
    public function setSabor($sb){
        $this->sabor = $sb;
    }
}
?>