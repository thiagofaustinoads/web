<h1>Exercicio 1</h1>

<h3>A Salario é {{ $salario }}</h3>

@if($salario <=1000)
    <h3>o Salario foi reajustado</h3>
@else
    <h3>funcionário não tenha direito ao aumento</h3>
@endif