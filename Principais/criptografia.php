<?php
function CriaAlgo($tamanho){
  if ($tamanho == 0) {$tamanho=8;}

  $sLetras = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $sNumeros = '0123456789';
  $lnt = $tamanho;
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

function FazSenha($password, $username){

  $salt = hash('sha256', uniqid(mt_rand(), true). CriaAlgo(18) . strtolower($username));

  $hash = $salt . $password;
  $loops=256;

  for($i=0; $i < $loops; $i ++){
    $hash = hash('sha256', $hash);
  }
  $hash = $salt.$hash;
  return $hash;
}

function ChecaSenha($password, $dbpassword){
  $salt = substr($dbpassword, 0, 64);
  $hash = $salt . $password;

  $loops = 256;
  for($i = 0; $i < $loops; $i ++){
    $hash = hash('sha256', $hash);
  }
  $hash = $salt . $hash;
  if($hash == $dbpassword){
    return true;
  }else{
    return false;
  }

}
?>