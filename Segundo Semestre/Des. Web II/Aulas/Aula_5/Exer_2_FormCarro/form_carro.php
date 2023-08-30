<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Formulário Carro</h3>

    <form method="post" action="data_carro.php">
        <input type="text" name="nome" placeholder="Nome">
        <br><br>
        
        <input type="text" name="marca" placeholder="marca">
        <br><br>

        <select name="combustivel">
            <option value="">--Selecione o tipo--</option>
            <option value="G">Gasolina</option>
            <option value="D">Diesel</option>
            <option value="A">Alcool</option>
            <option value="F">Flex</option>
        </select>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>