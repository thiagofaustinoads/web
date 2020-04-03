<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 1</title>
</head>

<body>

    <h1>Exercício 17</h1>
    <br>

    <form action="/ex17" method="post">
        @csrf

        Nome do piloto:
        <input type="text" name="nome"/><br>

        distancia percorrida em Km:
        <input type="text" name="distancia"/><br>

        Tempo em horas:
        <input type="text" name="tempo"/><br>



        <br>
        <input type="submit" value="ENVIAR">

</body>
</form>
</html>