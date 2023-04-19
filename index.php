<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>

        <?php
         require __DIR__ . '/functions.php';
        
            
        $caratteri = [
            'alphabet' => 'qwertyuiopasdfghjklzxcvbnm',
            'numbers' => '1234567890',
            'symbols' => '\|!"£$%&/()=?^*.;,-_#@][><'
        ];



    $password = '';

    if (isset($_GET['lunghezza']) && !empty($_GET['lunghezza'])) {
        $lunghezza = $_GET['lunghezza'];
        $caratt = $caratteri['alphabet'] . $caratteri['numbers'] . $caratteri['symbols'];
        $scrumble = str_shuffle($caratt);
        while (strlen($password) < $lunghezza) {
            $password .= getCharacter($caratteri['alphabet']);
        }
       
      
    }
            
   ?>


    <main>
        <form action="index.php" method="GET" class="container">
                <?php
                    if (isset($password)) {
                        if ($password == true) {
                            ?> 
                        <div class="alert alert-success" role="alert">
                        
                            <?php echo $password . strlen($password) ?>
                            
                        </div>
                        <?php 
                        }
                    }
                ?>

            <div class="mb-3 col-3 m-auto">
                <label for="exampleInputPassword1" class="form-label titolo">Lunghezza
                    Password</label>
                <input type="number" class="form-control col-3 text-center" name="lunghezza">
            </div>

                <button type="submit" class="btn btn-primary text-uppercase">genera</button>
                <button type="refer" class="btn btn-warning text-uppercase">annulla</button>


        </form>


    </main>



</body>
</html>