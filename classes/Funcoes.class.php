<?php

class Funcoes {
    
    public function tratarCaracter($vlr, $tipo){
	switch($tipo){
            case 1: $rst = utf8_decode($vlr); break;
            case 2: $rst = utf8_encode($vlr); break;    
			case 3: $rst = htmlentities($vlr, ENT_QUOTES, "ISO-8859-1"); break; 
        }
        return $rst;
    }	
    
    public function dataAtual($tipo){
	switch($tipo){
            case 1: $rst = date("Y-m-d"); break;
            case 2: $rst = date("Y-m-d H:i:s"); break;
            case 3: $rst = date("d/m/Y"); break;
        }
        return $rst;
    }
    
    public function base64($vlr, $tipo){
        switch($tipo){
            case 1: $rst = base64_encode($vlr); break;
            case 2: $rst = base64_decode($vlr); break;
        }
        return $rst;
    }
    
}

?>
