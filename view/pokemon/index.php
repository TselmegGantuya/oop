<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>pokemon</title>
</head>
<body>
<div><?php 
$bag = new Pokebag;

$pika = new Pikachu; 
$char = new Charmeleon;
$bag->add($pika);
$bag->add($char);
$bag->delete('Pikachu');
$bag->reset();
$bag->all();

var_dump($pika);
$pika->attack('Pika Punch',$char);
var_dump($char);
?></div>
</body>
</html>