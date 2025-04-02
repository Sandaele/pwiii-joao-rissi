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

echo "<H1> Conhecendo variavel de memoria Arrays parte 2</H1>";
//Arrays - Matriz

$cor = array(1=>"azul",2=>"amarelo",3=>"verde");

echo "<BR><h2> Mostrando valor da posicao 3</h2>";
echo $cor[3];
echo "<br>Fim";

?>



</body>
</html>