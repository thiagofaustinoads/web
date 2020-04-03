<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 1</title>
</head>

<body>

    <h1>Exercício 9</h1>
    <br>

    <form action="/ex9" method="post">
        @csrf

        digite o numero 1:
        <input type="text" name="num1"/><br>

        digite o numero 2:
        <input type="text" name="num2"/><br>


        <br>
        <input type="submit" value="ENVIAR">

</body>
</form>
</html>