<?php
$_SESSION['nombre']='sergio';
$_SESSION['clave']='123';
echo $_SESSION['nombre'];
if(isset($_SESSION['nombre'])){
 session_destroy()
}
?>

<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario='osorio';
    $clave='chochorio';
    $usuariof=isset($_REQUEST['usuariof'])?$_REQUEST['usuariof']:null;
    $usuariof=isset($_REQUEST['clavef'])?$_REQUEST['clavef']:null; 
    if($usuario==$usuariof&&$clave==$clavef){
        session_start();
        $_SESSION['usuariof']=$_REQUEST['usuariof'];
        header(location:'27iniciarsesion.php');
        die();
    }else{
        echo'<p style="color=red">usuario o contraseña incorrecto</p>';
    }
}    
?>