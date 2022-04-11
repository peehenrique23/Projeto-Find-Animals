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
        <h1 align="center">Cadastro de Animais</h1>
    </head>

    <article>
        <div class="formu">
            <form action=inseribd.php method="post" name="cadastro" enctype="multipart/form-data">
                    <br>
                    <label>Nome*:</label>
                    <input type = "text" name ="nome" maxlength="9" required>
                    <br><br>
                    <label>Sexo*:</label>
                    <input type="radio" name ="sexo" value="Macho" required> Macho
                    <input type="radio" name ="sexo" value="Femea" required> Fêmea
                    <br><br>
                    <label>Tamanho*:</label>
                    <input type="radio" name ="tamanho" value="P" required> P
                    <input type="radio" name ="tamanho" value="M" required> M
                    <input type="radio" name ="tamanho" value="G" required> G
                    <br><br>
                    <label>Espécie*:</label>
                    <input type="radio" name="especie" value="gato" required> Gato
                    <input type="radio" name="especie" value="cachorro" required> Cachorro
                    <br><br>
                    <label>Descrição:</label>
                    <textarea name="txt" id="" cols="30" rows="5" placeholder="Descrição do Animal" maxlength="500"></textarea>
                    <br><br>
                    <label>Foto P*:</label>
                    <input type="file" name="arquivo"/><br>
                    <br><br>
                    <label>Foto S*:</label>
                    <input type="file" name="doc[]" multiple/><br>
                    <br><br>
                    <input type="submit" name="submit" id="rodape" />
                    <br><br>
            </form>

        </div>
    </article>
</body>
</html>


