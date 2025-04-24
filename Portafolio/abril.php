<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
class fruta{
    //propiedades
    public$nombre;
    public $color;
    //metodos

   function cat_nombre($nombre)
   $this->nombre=$nombre;

function ENV_nombre(){
    return $this->nombre;
}
}
$pera=newfruta();
$pera->cat_nombre("pera");

echo $pera-> ENV_nombre();
echo $pera->nombre;


?>
</body>




<?php 
    class fruit{
        public $name;
        public $color;
        public function __construct ($name,$color){
            $this->name=$name;
            $this->color=$color;

        }
        protected function intro(){
            echo"the fruit is{$this->name} and the color {$this->color}.";
        }
    }
    class strawberry extends fruit{
        public function message (){
            echo" Am i a fruit or a berry";
            $this->intro();
        }
    }
     $strawberry = new strawberry("strawberry","red");
     $strawberry->message();

    ?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    class gato{
        public $nombre='tom';
        public function maullar():void{
            echo'miau';
        }
    }
?>
   
</body>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 class gato {
    function __construct(){
        $this->nombre = $nombre;
    }
    function env() {
        return $this->nombre;
    }
    
    $migato = new gato('Gato con botas');
    echo $migato->env();
}

?>
</body>


<?php
    abstract class car{
    public $name;
    public function__construct($name){
        $this->name=$name;
    }
     abstract public function intro():string;
    }
    
    class audi extends car{
        public function intro() : string{
            return "choose a option" $this->name;
        }
    }
    
    $audi=new audi ("audi");
    echo $audi->intro();
    
    
    ?>

//una constante no se puede cambiar 
para acceder a una constante por una clase se usa el operador 
<?php
 class adios{
    const LEAVING_MESSAGE="Gracias por participar";
 }
 echo adios ::LEAVING_MESSAGE; 
 class goodbye{
    const LEAVING_MESSAGE="than you for the partipation";
    public function byebye(){
        echo self::LEAVING_MESSAGE;
    }
 }

?>

<?php
abstract class padre{
    abstract protected function name($name);
}
class child extends parent {
    public function name($name);
}
?>


</html>