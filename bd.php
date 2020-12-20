<?php
    
    $servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='ggisci';
     
    //conexion a la base de datos
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    else{
         //conexion exitosa

         /*revisar si traemos datos a insertar en la bd  dependiendo
         de que el boton de enviar del formulario se le dio clic*/

         if(isset($_POST['submit'])&& !empty($_POST['id'])){
                //obtenemos datos del formulario
                $id = $_POST['id'];
                $nom =$_POST['nombre'];
                $cuenta =$_POST['cuenta'];
                $pass =$_POST['contra'];
                
                //hacemos cadena con la sentencia mysql para insertar datos
                $sql = "INSERT INTO usuarios (id, nombre, cuenta, contrasena) VALUES('$id','$nom','$cuenta','$pass')";
                $conexion->query($sql);  //aplicamos sentencia que inserta datos en la tabla usuarios de la base de datos
                if ($conexion->affected_rows >= 1){ //revisamos que se inserto un registro
                    echo '<script> alert("registro insertado") </script>';
                }//fin
             
              //continaumos con la consulta de datos a la tabla usuarios
         //vemos datos en un tabla de html
         $sql = 'select * from usuarios';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
         $resultado = $conexion -> query($sql); //aplicamos sentencia

         if ($resultado -> num_rows){ //si la consulta genera registros
              echo '<div style="margin-left: 20px;">';
              echo '<table class="table table-hover" style="width:50%;">';
              
                echo '<tr>';
                    echo '<th>id</th>';
                    echo '<th>nombre</th>';
                    echo '<th>cuenta</th>';
                    echo '<th>contrasena</th>';
                echo '</tr>';
                while( $fila = $resultado -> fetch_assoc()){ //recorremos los registros obtenidos de la tabla
                    echo '<tr>';
                        echo '<td>'. $fila['id'] . '</td>';
                        echo '<td>'. $fila['nombre'] . '</td>';
                        echo '<td>'. $fila['cuenta'] . '</td>';
                        echo '<td>'. $fila['contrasena'] . '</td>';
                    echo '</tr>';
                }   
                echo '</table">';
             echo '</div>';
         }
         else{
             echo "no hay datos";
         }
        
         }//fin 

        
         
    }


?>