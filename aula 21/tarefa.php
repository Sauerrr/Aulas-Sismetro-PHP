<?php



function numero_primo($posicao)
{
    $primos = array(2);

    $n = 3;

    while (count($primos) < $posicao) {
        $e_primo = true;
        foreach ($primos as $primo) {
            if ($n % $primo == 0) {
                $e_primo = false;
            }
        }
        if ($e_primo) {
            $primos[] = $n;
        }
        $n++;
    }
    return $primos[$posicao - 1];
}

?>



<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarefa número primo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <style>
        body {

            background: linear-gradient(to right, #000000, #333333);
            font-family: 'Arial', sans-serif;
            color: blue;

        }



        h1 {
            text-align: center;
            color: dark;
            margin-top: 6rem;

        }

        .gif{
            text-align: center;
        }
    </style>


    <h1>Calculadora números primos</h1>

    <div class="row">
        <div class="col-3 offset-4">


            <h2 style="text-align: center; color: dark">RESULTADO:</h2>

            <?php
            if (isset($_POST["posicao"])) {


            ?>
                <div class="row">
                    <div class="col-2 offset-3 text-center">
                        <p style="color:blue"> <?php echo $_POST["posicao"]; ?> </p>

                    </div>
                    <div class="col-5 text-center">
                        <p style="color: blue; "> <?php echo numero_primo($_POST["posicao"]); ?></p>

                    </div>
                </div>
            <?php
            }
            ?>
            <form method="POST">



                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Posição:</label>
                    <input type="text" class="form-control" id="posição do numero" name="posicao" placeholder="Posição número primo" value="<?php if (isset($_POST["posicao"])) echo $_POST["posicao"];  ?>">

                </div>



                <button type="submit" class="btn btn-primary">Enviar</button>

            </form>

        </div>

    </div>

    <br>
        </br>
    <div class="gif">
        <img src="https://i.gifer.com/FcUW.gif">
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>