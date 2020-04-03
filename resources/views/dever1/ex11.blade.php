<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 1</title>
</head>

<body>

    <h1>Exercício 11</h1>
    <br>

    <form action="/ex11" method="post">
        @csrf

        Nome do funcionario:
        <input type="text" name="nome"/><br>

        Horas trabalhas:
        <input type="text" name="horas"/><br>

        Valor da Hora:
        <input type="text" name="valor"/><br>

        numero de Filho:
        <input type="text" name="filho"/><br>


        <br>
        <input type="submit" value="ENVIAR">

</body>
</form>
</html>