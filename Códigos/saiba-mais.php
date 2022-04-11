<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
		include 'conexao.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM cadastrodeanimais WHERE animalid = '{$id}'";
		$relatorio = mysqli_query ($conexao, $sql);
		$linha;
		while ($linha = mysqli_fetch_assoc ($relatorio)){
            ?>
            <?php echo $linha['nome']; ?>
	<?php } ?>
</body>
</html>

