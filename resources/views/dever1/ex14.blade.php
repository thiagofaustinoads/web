<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 1</title>
</head>

<body>

    <h1>Exercício 14</h1>
    <br>

    <form action="/ex14" method="post">
        @csrf

        Digite a nota 1:
        <input type="text" name="nota1"/><br>

        Digite a nota 2:
        <input type="text" name="nota2"/><br>

        Digite a nota 3:
        <input type="text" name="nota3"/><br>



        <br>
        <input type="submit" value="ENVIAR">

</body>
</form>
</html>