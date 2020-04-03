<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 1</title>
</head>

<body>

    <h1>Exercício 6</h1>
    <br>

    <form action="/ex6" method="post">
        @csrf

        carros vendidos:
        <input type="text" name="carros"/><br>

        valor total das vendas:
        <input type="text" name="valorvendas"/><br>

        salario fixo:
        <input type="text" name="salario"/><br>


        <br>
        <input type="submit" value="ENVIAR">

</body>
</form>
</html>