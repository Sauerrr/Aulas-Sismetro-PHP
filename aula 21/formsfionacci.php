<?php



function fibonacci($p)
{
    $sequencia = array();
    $sequencia[0] = 1;
    $sequencia[1] = 1;

    for ($i = 2; $i < $p; $i++) {
        $sequencia[$i] =  $sequencia[$i - 1] + $sequencia[$i - 2];
    }

    return $sequencia[$p - 1];
}

?>



<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <style>
        body {
            background: rgb(2, 0, 36);
            background: radial-gradient(circle, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        }

        h1 {
            text-align: center;
            color: white;
            margin-top: 6rem;

        }

        label {
            color: white;
        }
    </style>


    <h1>Calculadora Fibonacci</h1>

    <div class="row">
        <div class="col-3 offset-4">


            <h2 style="text-align: center; color: white">RESULTADO:</h2>

            <?php
            if (isset($_POST["posicao"])) {


            ?>
                <div class="row">
                    <div class="col-2 offset-3 text-center">
                        <p style="color: white"> <?php echo $_POST["posicao"]; ?> </p>
                       
                    </div>
                    <div class="col-5 text-center">
                        <p style="color: white"> <?php echo fibonacci($_POST["posicao"]); ?></p>
                        
                    </div>
                </div>
            <?php
            }
            ?>
            <form method="POST">



                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Posição:</label>
                    <input type="text" class="form-control" id="posição do numero" name="posicao" placeholder="Posição sequencia de Fibonacci" value="<?php if (isset($_POST["posicao"])) echo $_POST["posicao"];  ?>">

                </div>



                <button type="submit" class="btn btn-primary">Enviar</button>

            </form>

        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>