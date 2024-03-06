<?php
include_once("config.php");

//for 
	// cad= select candidato from eleitor;
	 
	 //comparar candidato = "amaral"
	 //voto = voto + 1;
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <title>Resultado</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="result.css">
</head>

<body>

  <div class="container">
  <h2>Contagem de votos</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">ID</div>
      <div class="col col-2">Nome</div>
      <div class="col col-3">Votos</div>
    </li>
     <?php 
	
		$result_candidato = "SELECT * FROM candidato ORDER BY id";
		$resultado_candidato = mysqli_query($mysqli, $result_candidato);
		
		//vai percorrer o resultado da pesquisa
		while($row_candidato = mysqli_fetch_assoc($resultado_candidato)){
			echo "<li class='table-row'>";
			echo "<div class='col col-1' data-label='Id'>".$row_candidato['id']."</div>";
			echo "<div class='col col-2' data-label='Nome'> ".$row_candidato['nome']."</div>";
			echo "<div class='col col-3' data-label='Votos'>".$row_candidato['qtd_de_votos']."</div>";
			echo "</li>";
		}
	
	?>
	</ul>
</div>
  

</body>

</html>
