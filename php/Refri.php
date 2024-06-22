<?php
class Refri extends Bebida{

    private $retornavel;

    public function retornavel(){
        if ($this->retornavel == 'Sim'){

            $this->retornavel == true;
        }
        else if ($this->retornavel == 'Não'){
            
            echo "Este refrigerante não é retornável";
        }
    }

}
?>