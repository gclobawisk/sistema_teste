<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <form method="POST">
            <div class="form-group">
                <label for="texto">Texto</label>
                <textarea class="form-control" id="texto" rows="3" name="texto"></textarea>
            </div>

            <button class="btn btn-primary mt-2" type="submit">Mostrar</button>
            <a href="index.php"><b class="btn btn-danger mt-2">Voltar</b></a>


            <br>
            <?php

            if(isset($_POST["texto"])){
                $texto = $_POST["texto"];
                echo "<p class='text-danger'> Resultado: $texto </p>";
            }
            
            ?>
        </form> 
    </div>
    
</body>
</html>

