<?php
$num1 = "10";
$num2 = "8";
$operacao1 ="-";

switch($operacao1){
    case"+":
      $resultado = $num1 + $num2;
      echo "O resultado é:" . $resultado;

      break;
    case"-":
        $resultado = $num1 - $num2;
        echo "O resultado é:" . $resultado;
        break;
    case"*":
       $resultado = $num1 * $num2;
       echo "O resultado é:" . $resultado;
            break;
    case"/":
        $resultado = $num1 / $num2;
        echo "O resultado é:" . $resultado;
        break;
    default:
      echo"Invalido!";
        break;
}
?>