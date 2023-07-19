<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <style>

    html, body{
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, rgb(45, 45, 255), rgb(7, 14, 73));
}

.tela-login {
    background-color: rgba(0, 0, 0, 0.8);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 90px;
    border-radius: 15px;
    color: white;
}

input {
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
    border-radius: 10px;
}

.inputSubmit {
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
}

.inputSubmit:hover {
    background-color: deepskyblue;
    cursor: pointer;
}

.home {
    background-color: rgba(103, 120, 136, 0.8);
    border-radius: 10px;
    padding: 10px;
    text-decoration: none;
}

    </style>
</head>
<body>
    <a class="home" href="home.php">Voltar</a>
    <div class="tela-login">
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br>
            <br>
            <input type="password" name="senha" placeholder="Senha">
            <br>
            <br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>