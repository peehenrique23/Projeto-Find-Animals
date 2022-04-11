<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Cadastro Animais</title>
</head>
<body>
    <head>
        <h1 align="center">Cadastro de Animais Saiba Mais</h1>
    </head>

    <article>
        <div class="formu">
            <form action=inseribd.php method="post" name="cadastro" enctype="multipart/form-data">
                    <textarea name="txt" id="" cols="30" rows="5" placeholder="Descrição do Animal" maxlength="500"></textarea>
                    <br>
                    <input type="file" name="arquivo"/><br>
            </form>
        </div>
    </article>
</body>
</html>

