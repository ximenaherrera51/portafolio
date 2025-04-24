<html>
    <body>
        <?php

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               
                foreach ($_FILES["imagen"]["error"] as $posicion => $error) {
                  
                    if ($error == UPLOAD_ERR_OK) {
                     
                        $dir_subida = './uploads/';
                      
                        $fichero_subido = $dir_subida . basename($_FILES['imagen']['name'][$posicion]);
                    
                        if (move_uploaded_file($_FILES['imagen']['tmp_name'][$posicion], $fichero_subido)) {
                         
                            echo '<p>Se subió perfectamente' . $_FILES['imagen']['name'][$posicion] . '.</p>';
                           
                            echo '<p><img width="500" src="' . $fichero_subido . '"></p>';
                        } else {
                            
                            echo '<p>¡Ups! Algo ha pasado.</p>';
                        }
                    }
                }
            }
        ?>
   
        <form method="post" enctype="multipart/form-data">
            <p>
                
                <input type="file" name="imagen[]">
                <input type="file" name="imagen[]">
                <input type="file" name="imagen[]">
            </p>
            <p>
               
                <input type="submit" value="Enviar">
            </p>
        </form>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros</title>
</head>
<body>


<?php
if($_SERVER['REQUEST_METHOD']=='POST'){ 
    $dir='./load/';
    $ficheros=$dir.basename($_FILES['fichero_usuario'](['name']))
    if(more_upload_files($_FILES['fichero_usuario']$fichero)){
    echo'<p>se subio correctamente </p>';
    echo'<p> <img width="500"src=.$fichero. </p>';
    }
    

   
 else{
    echo'<p> Error</p>'
 }
} 
?>
<form method ="post" enctype="multipar/form-data">
        <input type="file" name="fichero_usuario">
        <input type="submit" value="Enviar">
    </form>



</body>
</html>
