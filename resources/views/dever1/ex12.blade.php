<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 1</title>
</head>

<body>

    <h1>Exercício 12</h1>
    <br>

    <form action="/ex12" method="post">
        @csrf

        digite o ano:
        <input type="text" name="ano"/><br>

        digite o mes:
        <input type="text" name="mes"/><br>

        digite o dia:
        <input type="text" name="dia"/><br>


        <br>
        <input type="submit" value="ENVIAR">

</body>
</form>
</html>