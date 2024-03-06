<html>

<head>
	<title> Cadastro </title>
	
	<?php 
	
		// include database connection file

		include_once("config.php");
		
	?>
	<link rel="stylesheet" type="text/css" href ="eleicao.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="shortcut icon" href="https://www.processus.com.br/wp-content/uploads/2018/07/icone-professor-quadroegro.png">
  
</head>
<body>
	<form action="index.php" method="GET">
		<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://www.processus.com.br/wp-content/uploads/2018/07/icone-professor-quadroegro.png" alt=""/>
                        <h3>Bem vindo</h3>
                        <p>"Com um pé no chão e o outro nas estrelas, o professor pode levar seus alunos a todos os lugares."</p>
                    </div>
                    <div class="col-md-9 register-right">
                      
                        <div class="tab-content" id="myTabContent">
                                <h3 class="register-heading">Eleição do Educador</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nome" placeholder="Nome*" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Email*" value="" required />
                                        </div>
										<div class="form-group">
                                            <input type="text" class="form-control" name="cpf" placeholder="Cpf*" value="" required />
                                        </div>
                                    </div>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------->									
                                    <div class="col-md-6">
                                        <div class="form-group">
										<select name="candidato"  class="form-control">
									   <option class="hidden"  selected disabled>Candidatos*</option>
									
						                  <?php
						                    $docente = mysqli_query ($mysqli, "SELECT * FROM candidato ORDER BY nome");
						                    foreach($docente as $candidato){
						                   	echo "<option value='".$candidato['nome']."'>".$candidato['nome']."</option>";
						                    }	
						                    ?>
					                     </select>
                                        </div>
                                        <div class="form-group">
										<div class="maxl">
                                            <label class="radio inline"> Qual área você se identifica? <p>
                                                    <input type="radio" name="area" value="exatas" checked>
                                                    <span> Exatas </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="area" value="humanas">
                                                    <span> Humanas </span> 
                                                </label>
												<label class="radio inline"> 
                                                    <input type="radio" name="area" value="biologicas">
                                                    <span> Biologicas </span> 
                                                </label>
												</div>
                                        </div>
                                        <input  class="btnRegister"  type='submit' name='salvar' value='Salvar'>
										<input  class="btnRegister" type="reset" name="reset" value="Excluir">
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>

            </div>
	</form>

	<?php
	
	if(isset ($_GET['salvar'])){
		$nome = $_GET['nome'];
		$email = $_GET['email'];
		$candidato = $_GET['candidato'];
		$cpf = $_GET['cpf'];
		
		$result = mysqli_query($mysqli, "INSERT INTO eleitor(nome,email,candidato,cpf) values('$nome','$email','$candidato','$cpf')");
 
		$result_candidato = "UPDATE candidato SET qtd_de_votos= qtd_de_votos + 1 WHERE nome='".$candidato."'";
		$resultado_candidato = mysqli_query($mysqli, $result_candidato);
	 	
		echo "<table align='rigth' width ='20%'><td><a class='btnRegister2' align='center' href= 'result.php'>Resultado</a></td></table> </br>";	
	}
	?>
<?php	
	switch ($candidato){
			 
			case "Amaral":
			 echo "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Seu voto em ".$candidato."!</strong>foi realizado com sucesso.</br></div>";
			 break;
			
			case "Francisco":
			 echo "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Seu voto em ".$candidato."</strong> foi realizado com sucesso.</br></div>";
			 break;
			 
			case "Ilton":
			 echo "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Seu voto em ".$candidato."</strong> foi realizado com sucesso.</br></div>";
			 break;
			 
			case "Jussara":
			 echo "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Seu voto em ".$candidato."</strong> foi realizado com sucesso.</br></div>";
			 break;
			
			case "Karla":
			 echo "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Seu voto em ".$candidato."</strong> foi realizado com sucesso.</br></div>";
			 break;
			 
			case "Katia":
             echo "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Seu voto em ".$candidato."</strong> foi realizado com sucesso.</br></div>";
             break;			 
			 
		}
	if ($candidato == "Katia" OR $candidato == "Ilton" OR $candidato == "Amaral"){
		echo "<div class='alert alert-primary alert-dismissible'>
         <button type='button' class='close' data-dismiss='alert'>&times;</button>
         Você votou em um professor(a) de <strong>ciências da natureza</strong></div>";
	}
	elseif ($candidato == "Karla") {
       echo "<div class='alert alert-primary alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        Você votou em um professor(a) de <strong>linguagens</strong></div>";
} 
elseif ($candidato == "Francisco" OR $candidato == "Jussara") {
      echo "<div class='alert alert-primary alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        Você votou em um professor(a) de <strong>humanas</strong></div>";
}

?>

</body>
</html>