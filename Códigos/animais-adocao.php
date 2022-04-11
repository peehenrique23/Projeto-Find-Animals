<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style/stylecards.css">
	<title>Adoções</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Noticias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Doações</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Adoções</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Projeto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Patrocinadores</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<br>


<section>
	<form action="filtrar.php">
		<select>
		<option value="">Tamanho</option>
		<option value="P">P</option>
		<option value="M">M</option>
		<option value="G">G</option>
		</select>
		<select>
		<option value="">Espécie</option>
		<option value="G">Gato</option>
		<option value="C">Cachorro</option>
		</select>
		<input type="submit" name="filtros" value="Filtrar"/>
	</form>
	<br>
	<br>
		<?php
		include 'conexao.php';
		$sql = "SELECT * FROM cadastrodeanimais";
		$relatorio = mysqli_query ($conexao, $sql);
		$linha;
		$caminho = 'fotos/';
		while ($linha = mysqli_fetch_assoc ($relatorio)){
		$img = $caminho . $linha['imgP'];?>
		<div class="conteiner">
			<!--EXIBIR NOME DO BANCO-->
			<div id="name">
				<?php echo $linha['nome'];?>
			</div>
			<!--EXIBIR IMAGEM DO BANCO-->
				<?php echo "<img src='{$img}' alt=''/>";?>
			<!--EXIBIR SEXO DO BANCO-->
			<div id="tam-sexo">
				<?php echo "Tam: " . $linha['tamanho'];?>
				<?php echo " - " . $linha['sexo'];?>
			</div>
			<div id="button1">
				<a href="saiba-mais.php?id=<?php echo $linha['animalid']?>">
				<input type="button" value="Saiba Mais">
				</a>
			</div>
		</div>
	<?php } ?>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

<!-- <form action="filtrar.php" method="post" >
			<label>Sexo:</label>
    		<input type="checkbox" name ="filtrosexo" value="Macho"> Macho
    		<input type="checkbox" name ="filtrosexo" value="Fêmea"> Fêmea
			<br>
			<label>Tamanho:</label>
    		<input type="checkbox" name ="filtrotamanho" value="P"> P
    		<input type="checkbox" name ="filtrotamanho" value="M"> M
			<input type="checkbox" name ="filtrotamanho" value="G"> G
			<br>
			<br>
			<input type="submit" name="filtrar" value="Filtrar" id="rodape" />
		</form><br><br> --> 