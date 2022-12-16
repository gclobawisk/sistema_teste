<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<table>
   <tr>
     <th>Valor</th>
     <th>Descrição</th>
   </tr>
<?php
for ($i=0; $i<10; $i++) {
?>    
   <tr>
     <td>Linha <?php echo $i ?></td>
     <td>Conteudo da Linha <?php echo $i ?></td>
    </tr>
<?php 
}
?>
</table>
<br />
<p><a href="index.php" class="btn btn-danger mt-3">Voltar para a Página Inicial</a></p>
