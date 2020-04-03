<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 2</title>
</head>

<body>

    <h1>Exercício 5</h1>
    <br>

    <form action="/e5" method="post">
        @csrf

        salario minimo: 
        <input type="text" name="SalararioMinimo"/><br>
        
        horas trabalhadas: 
        <input type="text" name="horaTrabalho"/><br>

        numero de depedentes do funcionario: 
        <input type="text" name="depedentes"/><br>

        horas extras trabalhadas: 
        <input type="text" name="HoraExtra"/>
        <br>
        
        <input type="submit" value="ENVIAR">

</body>
</form>
</html>