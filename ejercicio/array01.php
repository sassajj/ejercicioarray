<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        /*
        $clientes = ["Luciano Maggi", 25, "Maria Perez", 'Mario Diaz',"Luciano", 66, "Perez", 'Diaz'];

        echo $clientes[0]."<br>";
        echo $clientes[1]."<br>";
        echo $clientes[2]."<br>";
        echo $clientes[3]."<br>";
        */

        $clientes = array("Luciano Maggi", 25, "Maria Perez", 'Mario Diaz',"Luciano", 66, "Perez", 'Diaz');
        
       for($i=0; $i<8; $i++){

            echo "El cliente de la posicion ".$i. " es: " . $clientes[$i]. "<br>";
       }

    ?>

</body>
</html>




/*

        $clientes = ["Cliente 0", "Cliente 1", "Cliente 2", "Cliente 3", "Cliente 4", "Cliente 5", "Cliente 6", "Cliente 7"];

        echo $clientes[0]."<br>";
        echo $clientes[1]."<br>";
        echo $clientes[2]."<br>";
        echo $clientes[3]."<br>";
        echo $clientes[4]."<br>";
        echo $clientes[5]."<br>";
        echo $clientes[6]."<br>";
        echo $clientes[7]."<br>";

*/