

<?php

    if ((isset($_POST["email"]) && $_POST["email"] === "ifpr") && (isset($_POST["senha"]) && $_POST["senha"] === "tads")) {
        echo "Login realizado com sucesso";
    } 
    else {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <h3>Login</h3>

        <form method="post" action="">
            <input type="text" name="email" placeholder="email">
            <br><br>
            
            <input type="text" name="senha" placeholder="senha">
            <br><br>

            <button type="submit">Enviar</button>
        </form>

    </body>
    </html>
<?php
    }
?>