<?php 
  // 0x - Hexadecimal, 0b Binario, 0 - Octal
  // $hex = 0x1a;
  // $bin = 0b10;
  // $oct = 010;
  // echo "$hex $bin $oct ". var_dump($hex);

  // $estudante = true;
  // echo "Andre é estudante $estudante";

  // $vetor = [false, 1.2, 4, "oito"];
  // echo $vetor; Warning: Array to string conversion in
  // var_dump($vetor)

  class Pessoa {
    private string $nome;
  }

  $p = new Pessoa("André");
  var_dump($p)
?>