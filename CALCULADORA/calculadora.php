

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


  