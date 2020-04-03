<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 2</title>
</head>

<body>

    <h1>Exercício 1</h1>
    <br>

    <form action="/e3" method="post">
        @csrf

        Nota 01: 
        <input type="text" name="num1"/><br>
        Nota 02: 
        <input type="text" name="num2"/><br>
        Nota 03: 
        <input type="text" name="num3"/><br>

        <br>
        
        <input type="submit" value="ENVIAR">

</body>
</form>
</html>