<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<?php
$frutas = array("Abacate","Tomate","Laranja","Limão");
foreach ( $frutas as $indice => $fruta ) {
    echo "Índice " . $indice . " com o nome de " . $fruta;
    echo "<br />";
}
var_dump($frutas);
?>
<br />
<p><a href="index.php" class="btn btn-danger mt-3">Voltar para a Página Inicial</a></p>
