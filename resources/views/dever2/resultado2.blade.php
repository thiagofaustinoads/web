<h1>Exercicio 2</h1>

<h3>A Salario é {{ $salario }}</h3>

@if($salario <=1000)
    <h3>o Salario foi reajustado em 50%</h3>
@else
    <h3>o Salario foi reajustado em 30%</h3>
@endif