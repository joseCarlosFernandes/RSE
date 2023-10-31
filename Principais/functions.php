<?php
  function gerar(){
    $sLetras = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $sNumeros = '0123456789';
    $lnt = 8;
    $novaSenha='';

    for($lni=0; $lni<$lnt; $lni++){
      if(($lni%2)==0){
        $sorte=intval(rand(0,25));
        $novaSenha.=substr($sLetras,$sorte,1);
      }else{
        $sorte=intval(rand(0,9));
        $novaSenha.=substr($sNumeros, $sorte, 1);
      }
    }
    return $novaSenha;
  }

  function escolherImagemAleatoria($imagens) {
    $indiceAleatorio = rand(0, count($imagens) - 1);
    return $imagens[$indiceAleatorio];
  }

?>