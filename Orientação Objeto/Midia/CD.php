<?php
require_once("Midia.php");
class CD extends Midia{
    public function getTipo($midia){
                return "CD | ".$midia->getdados()."\n";
    }
}
?>
