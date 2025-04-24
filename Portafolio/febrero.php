

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


$media = array_reduce($exito, function($acumular, $pos){
    return $pos ['precio'] + $acumular;}, 0) /count($exito);
 echo $media;
?>

<?php 
   $tienda="abarrotes";

   function()use ($tienda){
    return"estoy en la tienda de $tienda";
    $varibiale=si;
   }
  echo $tienda;
 
?>
<?php
  

  $x=75; 
function myfunction(){ 
    echo $GLOBALS['x'];

  }
  myfunction();



?>

<?php 

function myfunction(){
    $GLOBALS['x']=100;
}
myfunction();
echo$GLOBALS['x'];
echo$x;

?>


       

