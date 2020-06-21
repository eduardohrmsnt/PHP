<?php
$myfile = fopen("teste.txt", "w") or die("Não é possível abrir o arquivo.");
$texto = "Teste de texto, texto de teste";
fwrite($myfile,$texto);
fclose($myfile);
?>