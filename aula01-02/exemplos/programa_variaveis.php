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
//variavel inteiro
$idade=20;
$saldoestoque=-100;
// Variavel do tipo double ou float
$taxa=1.257;
$indice=2.19999;
$preco=12e4;
//igual 120.000;

//variavel string;
$nome="Roberto Carlos";
$profissao="Cantor";
//
echo "<h2>Mostrando variaveis</h2>";
echo $idade;
echo "<br>";
echo $saldoestoque;
echo "<hr>";
echo "Nome: ",$nome;

?>



</body>
</html>