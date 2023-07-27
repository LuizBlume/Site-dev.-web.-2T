<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site | LF</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #7a500b, #DDB957);
            text-align: center;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid #a66908;
            border-radius: 15px;
            padding: 10px;
        }

        a:hover {
            background-color: #805208;
        }
    </style>
</head>

<body>
    <h1>Bem Vindo!</h1>
    <h2>Faça o cadastro, ou use seu login!</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>

</html>