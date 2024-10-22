<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php  
$carros = array(
    array("mercedes", 1000000),
    array("golf", 40000),
    array("sierra", 750000),
    array("onix", 300000),
    array("defender", 1500000),
);
array_push($carros, array("tsuru", 20000));
array_push($carros, array("mazda", 300000));
usort($carros, function($a, $b) {
    return $a[1] <=> $b[1];
});
foreach ($carros as $carro) {
    echo "carro: " . $carro[0] . ", precio: " . $carro[1] . " ";
}
?>
</body>
</html>