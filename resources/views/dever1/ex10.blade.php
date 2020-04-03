<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 1</title>
</head>

<body>

    <h1>Exercício 10</h1>
    <br>

    <form action="/ex10" method="post">
        @csrf

        quantidade minima:
        <input type="text" name="min"/><br>

        quantidade maxima:
        <input type="text" name="max"/><br>


        <br>
        <input type="submit" value="ENVIAR">

</body>
</form>
</html>