<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;
        }
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue; 
            border-radius: 10px;
            padding: 10px;
        }
        a:hover {
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <h1>Teste Teste teste</h1>
    <h2>teste teste</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastra-se</a>
    </div>
</body>
</html>