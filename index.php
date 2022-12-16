<?php 
require_once("constants.php");
@ $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$connection_error = $dbc->connect_error;
if ($connection_error != null) {
  echo "<p>Erro na conexão ao BANCO DE DADOS: $connection_error</p>";
  exit();
}
?>

<html>
 <head>

  <title>Sistema PHP (Meu Teste de Configuração)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
  <script src="https://code.jquery.com/jquery-3.6.2.min.js"  integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

 </head>
 <body>
 <h1> <?php echo "<p>Início do sistema</p>"; ?></h1>
	<ul>
		<li><a href="lista.php">Uma lista em PHP</a></li>
		<li onmouseover="detalhes('Tabelas')" id="tabelas"><a href="tabela.php">Tabelas com PHP</a></li>
		<li><a href="campos.php">Campos em PHP</a></li>
		<li><a href="include.php">Includes com PHP</a></li>
		<li><a href="calculo.php">Cálculo com PHP</a></li>
		<li><a href="texto.php">Texto com PHP</a></li>
	</ul>


    <a href="#" class='info_s'>Ocultar Informações</a>
            <div id='info' style='background-color: LightYellow'>
                <br />
                Aqui temos alguns exemplos dos principais códigos PHP reunidos com algumas funcionalidades do JQuery
            </div>
            
            <script type="text/javascript" language="javascript">  
                $(document).ready(function() {  
                    $(".info_s").click(function() {
                        //Verifica se a tag com id="info" está escondida
                        if ( $("#info").is(":hidden") ) {
                            $("#info").show();
                            $(this).html("Esconder Informações");
                        } else {
                            $("#info").hide();
                            $(this).html("Mostrar Informações");
                        }
                    });  
                });  
            </script> 

    <script src="assets/js/script.js"></script>
 </body>
</html>