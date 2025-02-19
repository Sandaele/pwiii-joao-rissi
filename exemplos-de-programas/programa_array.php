<html><head><title>Aulas de PHP</title></head>
<body bgcolor="yellow">
<H1> Conhecendo Linguagem PHP</H1>
<BR><BR>
<?php
//Linha de comentario
//Linha ignorada pelo servidor php
/* testando mais de 
uma linha de
comentario
*/

echo "<H1> Conhecendo variavel de memoria</H1>";
//Arrays - Matriz

$cor[1]="azul";
$cor[2]="amarelo";
$cor[3]="verde";

echo "<BR><h2> Mostrando valor</h2>";
echo $cor[2];
echo "<br>Outro exemplo <br> Posição um da arrays = ";
echo "<b>",$cor[1],"<b>";

?>



</body>
</html>