<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <h1>Gerefenciador de Tarefas</h1>
    <form>
        <fieldset>
            <legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome" />
                    
                </label>
                <input type="submit" value="Cadastrar" />
            </legend>
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefas) : ?>
            <tr>
                <?php endforeach; ?>
            </tr>
    </table>
</body>
</html>