<?php
class Bebida{
    private $nome;
    private $preco; 
    private $bebida;

    //Relativo ao nome
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    //Relativo ao preço
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($p){
        $this->preco = $p;
    }

    //Relativo a Bebida
    public function getBebida(){
        return $this->bebida;
    }
    public function setBebida($b){
        $this->bebida = $b;
    }

    public function getPromo(){

    }

    public function VerificarPreco(){
        if($this->getPromo()){
            echo "<p>".$this->getNome()."Corre que ta em promoção!!! dona de casa<p>";
        }else{
            echo "<p>".$this->getNome()."O preço se encontra normal";
        }
    }

    public function MostrarBebida(){
        if($this->getBebida() == "Vinho"){
            echo "<p> Nome: ".$this->getNome()."<P>";
            echo "<p> Preço: ".$this->getPreco()."<P>";
            echo "<p>".$this->getPromo()."<P>";
        }
    }

}
?>