<!DOCTYPE html>
<html>
	     <head>
		       <title>Calculadora</title>
		       <link href="Estilos.css" rel="stylesheet" type="text/css" />
		 </head>	
 
		    <body>
 
		      <h1>Calculadora POXI</h1>        	      	 
 
			  <form action="calculadora.php" method="POST">
 
				<input type="text" name="numero1" placeholder="Numero 1">
                <input type="text" name="numero2" placeholder="Numero 2">
				<br>

                <input type="radio" name="operacion" value="suma"id="">Suma
                <input type="radio" name="operacion" value="resta"id="">Resta
                <input type="radio" name="operacion" value="multiplicacion"id="">Multiplicacion
                <input type="radio" name="operacion" value="divicion"id="">Divicion

                <br>
                <input type="submit"value="Calcular">
			   </form>

                <br><br>
		  </body>	
 
	</html>


    <?php

        $numero1= $_POST["numero1"];
        $numero2= $_POST["numero2"];
        $operacion = $_POST["operacion"];

        $resultado="";

        if ($operacion=="suma"){
            $resultado= $numero1 + $numero2;
        }

        if ($operacion=="resta"){
            $resultado= $numero1 - $numero2;
        }

        if ($operacion=="multiplicacion"){
            $resultado= $numero1 * $numero2;
        }

        if ($operacion=="divicion"){
            $resultado= $numero1 / $numero2;
        }
    
        echo "Resultado = " . $resultado;
    ?>


  