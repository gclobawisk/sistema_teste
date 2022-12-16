<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <?php
    $select = array("", "Somar(+)", "Subtrair(-)","Multiplicar(*)","Dividir(/)");
    $fname = $_REQUEST["fname"];
    $Pnum = $_REQUEST["Pnum"];
    $Snum = $_REQUEST["Snum"];
    $lname = $_REQUEST["lname"];
    $final = $_REQUEST["final"];
    $comando = $_REQUEST["comando"];
    
    if ( $comando ) {
        if ( $lname == 1 ) {
            $final = $Pnum + $Snum;
        } elseif ( $lname == 2 ) {
            $final = $Pnum - $Snum;
        } elseif ( $lname == 3 ) {
            $final = $Pnum * $Snum;
        } elseif ( $lname == 4 ) {
            $final = $Pnum / $Snum;
        }  
    }
    
    ?>
    <form>
    <label for="fname">Referência para o Cálculo:</label><br>
    <input type="text" name="fname" value="<?php echo $fname ?>"><br>
    <label for="Pnum">Cálculo:</label><br>
    <input type="text" name="Pnum" value="<?php echo $Pnum ?>">
    <select name="lname">
        <?php 
        foreach ($select as $chave => $sel) {
        ?>
            <option value="<?php echo $chave ?>"  <?php echo ( $lname == $chave ? " selected " : "" ) ?>><?php echo $sel ?></option>
        <?php 
        }
        ?>
    </select>
    <input type="text" name="Snum" value="<?php echo $Snum ?>"> = 
    <input type="text" name="final" value="<?php echo $final ?>">  
    <br>
    <input type="submit" name='comando' value="Executar" />
    </form> 
    <?php 
    var_dump($_REQUEST);
    ?>

    <p><a href="index.php" class="btn btn-danger mt-3">Voltar para a Página Inicial</a></p>


</div>


