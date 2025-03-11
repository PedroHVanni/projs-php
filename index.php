<?php
$cidade = "<b>Bauru</b>";/* variavel em negrito */
$dia = "6";/* variavel */
$mes = "março";/* variavel */
$ano = "2025";/* variavel */
while ($dia < 31){
    echo "$cidade, $dia de $mes de $ano<br>";/* apresentando as variaveis criadas acima */
    $dia+=7;
    /*Neste código estamos criando uma variavel para cada informação que sera apresentada no comando "echo" */
}
?>