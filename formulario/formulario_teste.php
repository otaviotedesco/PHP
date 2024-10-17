<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>

    <form action="results.php" method="post">

        <table border="0" align="center">
            <tr>
                <td><label for="Nome">Nome</label></td>
                <td><input type="text" name="nome" id="nome"></td>
            </tr>

            <tr>
                <td><label for="Sobrenome">Sobrenome</label></td>
                <td><input type="text" name="sobrenome" id="sobrenome" required></td>
            </tr>

            <tr>
                <td><label for="eh_aluno" name="eh_aluno" id="eh_aluno">É aluno de informática?</label></td>
                <td><input type="checkbox" name="eh_aluno" id="eh_aluno" value="1"></td>
            </tr>


            <tr>
                <td><label for="idade">Idade</label></td>
                <td>

                    <input type="radio" name="idade" value="1">Menos de 18 anos</input>
                    <br>
                    <input type="radio" name="idade" value="2">Entre 18 e 30 anos</input>
                    <br>
                    <input type="radio" name="idade" value="3">Entre 31 e 50 anos</input>
                    <br>
                    <input type="radio" name="idade" value="4">Mais de 50 anos</input>
                    <br>
                </td>

                </select>
            </tr>

            <tr>

                <td><label for="localidade">Localidade</label></td>
                <td><select name="localidade" id="localidade">
                        <option value="Chaves">Chaves</option>
                        <option value="Bragança">Bragança</option>
                        <option value="Mirandela">Mirandela</option>
                    </select></td>
            </tr>

            <tr>
                <td><label for="sugestoes">Sugestões</label></td>
                <td><textarea name="sugestoes" id="sugestoes" cols="30" rows="5"></textarea></td>
            </tr>

            <tr>
                <td> <button type="submit">Upload</button>
                    <button type="reset">Cancelar</button>
                </td>
            </tr>
        </table>


</body>

</html>