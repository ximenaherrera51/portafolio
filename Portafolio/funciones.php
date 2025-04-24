<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
//parametros
function myfunction (string $text = 'cualquier cosa '): string
{
    return 'hola ' . $text . strlen($text);
}
echo myfunction();
echo myfunction('jose ');
?>

<hr>

<?php 
function my (string $text = 'cualquier cosa '  , string $last = "fea "): string
{
    return 'hola ' . $text . $last . strlen($text);
}
echo my();
echo my('jose ');
echo my('jose ', 'perez ');
?>

<hr>

<?php 
function mifuncion(int $num): int
{
    return $num + 1;
}
echo mifuncion(4);
?>

<hr>

<?php 
function funcion(int $pos): ?string
{
    switch($pos) {
        case 1: 
            return "azul";
        case 2: 
            return "rojo";
        case 3:
            return "verde";
        default:
            return null;
    }
}
echo funcion(3);
?>

<hr>

<?php 
function myfuncion(float $pos): float | string
{
    if($pos > 0){
        return $pos * 2;
}else{
    return 'no es numero';
}
}
echo myfuncion(4.5);

echo myfuncion(15);
?>

<hr>

<?php 
//Anonimas
function () {
    return 'soy anonima ';
};
$numeros = [10, 20, 30, 40];
$incremento = array_map(function($numero) {
    return $numero + 1;
},  $numeros);
var_dump($incremento);
?>

<hr>

<?php 
    //arreglos dimencionales
    $numeros = [10, 20, 30, 40];
    $exito = [
        123 =>[
            'nombre' => "camisa",
            'talla' => "xl",
            'precio' => 50000
        ],
        456 => [
            'nombre' => "pantalon",
            'talla' => "L",
            'precio' => 70000
        ],
        789 => [
            'nombre' => "blusa",
            'talla' => "S",
            'precio' => 40000
        ]
        ];
        echo $numeros [3];
        echo $exito[456]['nombre'];
?>

<hr>

<?php
    $numeros = [10, 20, 30, 40];
    $exito = [
        [
            'nombre' => "camisa",
            'talla' => "xl",
            'precio' => 50000
        ],
        [
            'nombre' => "pantalon",
            'talla' => "L",
            'precio' => 70000
        ],
        [
            'nombre' => "blusa",
            'talla' => "S",
            'precio' => 40000
        ]
        ];

        array_walk ($exito, function($prenda, $pos){
            echo $prenda['nombre']. PHP_EOL;
        }
    );

    echo("<hr>");   

    $valor = array_filter($exito, function($prenda){
        return $prenda['precio'] === "40000";
    }
);
?>

<hr>

<?php 

?>
</body>
</html>
