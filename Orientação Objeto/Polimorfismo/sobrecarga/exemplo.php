<?php
class exemplo{
    public function escrever($v="", $w=""){
        if($v=="" && $w==""){
            print("Valor: sem valor\n");
        } elseif($v==""){
            print("Valor: ".$v."\n");
        } else{
            print("Valor: ".$v." ".$w."\n");
        }
    }
}
?>