<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appunti php</title>
    <style>

        body {
            background-color: black;
            color: white;   
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
       
    </style>
</head>
<body>
    
    <!-- Passare come parametri GET name, mail e age e
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. che mail contenga un punto e una chiocciola
    3. e che age sia un numero.
    Se tutto è ok stampare "Accesso riuscito", altrimenti
    "Accesso negato" -->

    <?php 

        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];

        //debug
        echo "<h2>Dati inseriti: </h2>
              name = $name <br> 
              mail = $mail <br> 
              age = $age <br>";

        //validazione
        if (
            strlen($name) > 3 &&
            strpos($mail, ".") && 
            strpos($mail, "@") &&
            is_numeric($age)
            ) {

            echo "<h1>ACCESSO RIUSCITO!</h1>";
        } else {
            if ($name == null || $mail == null || $age == null) {
                echo "<h1>Inserisci tutti i dati</h1>";
            } else {
                echo "<h1>ACCESSO NEGATO :(</h1>";
            }           
        }

?>












 


    

</body>
</html>


