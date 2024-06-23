<?php
class Refri extends Bebida{

    private $retornavel;

    public function getRetornavel() {
        return $this->retornavel;
    }

    public function setRetornavel($retornavel) {
        $this->retornavel = $retornavel;
    }
}
?>