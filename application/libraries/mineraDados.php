<?php 

class mineraDados{

    public $array;

    public function separaArray($dados = null){

        $this->array = explode(';',$dados);
        return $this;

    }

    public function removeUltimoIndice(){

        if(is_array($this->array)){    
            $this->array = (array_filter($this->array));
        }else{

        $this->array = false;
    }

        return $this;
    }

    public function getResposta(){
    
        if($this->removeUltimoIndice()){
        
        $this->array = end($this->array);
        
        }
         return $this;
    }   


/*
****Pegar a resposta******
$work = new mineraDados();
$work->separaArray($dados)->getResposta(); // pegar a resposta

*/


}

?>