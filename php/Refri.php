<?php
require_once 'Bebida.php';
class Refri extends Bebida{

    private $retornavel;

    public function mudarRetornavel(){
        $this->retornavel = !$this->retornavel;
    }

    public function getRetornavel() {
        return $this->retornavel;
    }

    public function setRetornavel($ret) {
        $this->retornavel = $ret;
    }
}
?>
