<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style1.css">
    <title>Document</title>
</head>
<body>
<header>
	<div style='text-align:center'>
		<h1 style="color: wheat;">Pets para adoção</h1>
	</div>
	<a href="relatorio.php">Ver tudo</a>
</header>

<article>
    <?php
		$verifica = $_POST['filtrosexo'];
		$verifica2 = $_POST['filtrotamanho'];
    ?>
    <?php
		if($verifica == "Macho"){
			include 'conexao.php';
			$sql = "SELECT * FROM dadosanimais WHERE tipo LIKE 'Macho%'";
			$relatorio = mysqli_query ($conexao, $sql);
			$linha;}
			else if($verifica == "Fêmea"){
				include 'conexao.php';
				$sql = "SELECT * FROM dadosanimais WHERE tipo LIKE 'Fêmea%'";
				$relatorio = mysqli_query ($conexao, $sql);
				$linha;}
				else if($verifica2 == "P"){
					include 'conexao.php';
					$sql = "SELECT * FROM dadosanimais WHERE tipo LIKE 'P%'";
					$relatorio = mysqli_query ($conexao, $sql);
					$linha;}
					else if($verifica2 == "M"){
						include 'conexao.php';
						$sql = "SELECT * FROM dadosanimais WHERE tipo LIKE 'M%'";
						$relatorio = mysqli_query ($conexao, $sql);
						$linha;}
						else if($verifica2 == "G"){
							include 'conexao.php';
							$sql = "SELECT * FROM dadosanimais WHERE tipo LIKE 'G%'";
							$relatorio = mysqli_query ($conexao, $sql);
							$linha;}
		while ($linha = mysqli_fetch_assoc ($relatorio)){
	?>
    <div class="conteiner">
			<div class="cards">
				<tr>
					<td><br>
						<div id="img_circular">
							<img src="./fotos/fotos/cachorro.jpg" alt="">
						</div><br>
						<?php echo $linha['tipo'];?>
						<?php echo "</br>"?>
						<?php echo $linha['nome'];?>
						<?php echo "</br>"?>
						<?php echo $linha['tamanho'];?></div>
						<?php echo "</br>"?>
					</td>
				</tr>
			</div>
		</div>
	<?php 
/*/*if($verifica == "Macho" || $verifica2 == "P"){
			include 'conexao.php';
			$sql = "SELECT tamanho AND tipo FROM dadosanimais WHERE tipo LIKE 'Macho%' OR tamanho 'P%' GROUP BY tamanho";
			$relatorio = mysqli_query ($conexao, $sql);
			$linha;}
			else if($verifica == "Macho" || $verifica2 == "M"){
				include 'conexao.php';
				$sql = "SELECT tamanho AND tipo FROM dadosanimais WHERE tipo LIKE 'Macho%' OR tamanho 'M%' GROUP BY tamanho";
				$relatorio = mysqli_query ($conexao, $sql);
				$linha;}	
				else if($verifica == "Macho" || $verifica2 == "G"){
					include 'conexao.php';
					$sql = "SELECT tamanho AND tipo FROM dadosanimais WHERE tipo LIKE 'Macho%' OR tamanho 'G%' GROUP BY tamanho";
					$relatorio = mysqli_query ($conexao, $sql);
					$linha;}	
					else if($verifica == "Macho"){
						include 'conexao.php';
						$sql = "SELECT * FROM dadosanimais WHERE tipo LIKE 'Macho%'";
						$relatorio = mysqli_query ($conexao, $sql);
						$linha;}
        				else if($verifica == "Fêmea"){
        					include 'conexao.php';
        					$sql = "SELECT * FROM dadosanimais WHERE tipo LIKE 'Fêmea%'";
							$relatorio = mysqli_query ($conexao, $sql);
						$linha;}*/} ?>
</article>
</body>
</html>

