<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dever1Controller extends Controller
{
    public function ex1()
    {
        return view('dever1.ex1');
    }
    public function resultado1(Request $request){
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        $nota4 = $request->nota4;

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        $aluno = 'Thiago Faustino';


        return view ('dever1.resultado1', compact('media' , 'aluno'));

    }
    public function ex2(){

        return view ('dever1.ex2');

    }
    public function resultado2(Request $request){

        $total = $request->total;
        $brancos = $request->brancos;
        $nulos = $request->nulos;
        $validos = $request->validos;

        $percentualBrancos = ($brancos / $total) * 100;
        $percentualNulos = ($nulos / $total) * 100;
        $percentualValidos = ($validos / $total) * 100;

 

        return view ('dever1.resultado2', compact('percentualBrancos' , 'percentualNulos' , 'percentualValidos', 'total'));

    }
    
    public function ex3()
    {
        return view('dever1.ex3');
    }
    public function resultado3(Request $request){
        $salario = $request->salario;
        $reajuste = $request->reajuste;



        $reajuste = ($reajuste/100+1 ) * $salario;


        return view ('dever1.resultado3', compact('reajuste' ));

    }


    public function ex4()
    {
        return view('dever1.ex4');
    }
    public function resultado4(Request $request){
        $fabrica = $request->fabrica;
        $distribuidor = $request->distribuidor;
        $impostos = $request->impostos;
        $custo = $request->impostos;


        $custo = $fabrica;
        $impostos = ($fabrica/100) * 45;
        $distribuidor = ($fabrica/100) * 25;



        return view ('dever1.resultado4', compact('custo', 'distribuidor', 'impostos'  ));

    }


    public function ex5()
    {
        return view('dever1.ex5');
    }
    public function resultado5(Request $request){
        $fabrica = $request->fabrica;
        $distribuidor = $request->distribuidor;
        $impostos = $request->impostos;
        $custo = $request->impostos;

/*
        $custo = $fabrica;
        $impostos = ($fabrica/100) * 45;
        $distribuidor = ($fabrica/100) * 25;
        */

        $custo = $fabrica * ($impostos/100+1) * ($distribuidor/100+1);
        

        return view ('dever1.resultado5', compact('custo', 'distribuidor', 'impostos'  ));

    }


    public function ex6()
    {
        return view('dever1.ex6');
    }
    public function resultado6(Request $request){
        $carros = $request->carros;
        $valorvendas = $request->valorvendas;
        $salario = $request->salario;
        $salariomensal;

        $salariomensal = ($valorvendas*0.05)+$salario;

        

        return view ('dever1.resultado6', compact('salariomensal' ));

    }


    public function ex7()
    {
        return view('dever1.ex7');
    }
    public function resultado7(Request $request){
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $resultadonota = $request->resultadonota;


        $resultadonota = ($nota1*4) + ($nota2*6);
        $resultadonota = $resultadonota/(4+6);

    
        return view ('dever1.resultado7', compact('resultadonota' ));

    }

    public function ex8()
    {
        return view('dever1.ex8');
    }
    public function resultado8(Request $request){
        $raio = $request->raio;
        $altura = $request->altura;
        $volume = $request->volume;


        $volume = ($raio * $altura)*3.14;

    
        return view ('dever1.resultado8', compact('volume' ));

    }


    public function ex9()
    {
        return view('dever1.ex9');
    }
    public function resultado9(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;
        $resultado = $request->resultado;


        $resultado = ($num1+$num1) * $num1;

    
        return view ('dever1.resultado9', compact('resultado' ));

    }

    public function ex10()
    {
        return view('dever1.ex10');
    }
    public function resultado10(Request $request){
        $min = $request->min;
        $max = $request->max;
        $media = $request->media;


        $media = ($min+$max)/2;

    
        return view ('dever1.resultado10', compact('media' ));

    }


    public function ex11()
    {
        return view('dever1.ex11');
    }
    public function resultado11(Request $request){
        $nome = $request->nome;
        $horas = $request->horas;
        $valor = $request->valor;
        $filho = $request->filho;
        $resultado = $request->resultado;


       //$resultado = $valor*2/100*3+$valor;
       $resultado = $valor+$valor*$filho*0.03;

    
        return view ('dever1.resultado11', compact('resultado', 'nome' ));

    }


    public function ex12()
    {
        return view('dever1.ex12');
    }
    public function resultado12(Request $request){
        $ano = $request->ano;
        $mes = $request->mes;
        $dia = $request->dia;
        $resultado = $request->resultado;


       $resultado = ($ano*365)+($mes*30)+ $dia;

    
        return view ('dever1.resultado12', compact('resultado', ));

    }

    public function ex13()
    {
        return view('dever1.ex13');
    }
    public function resultado13(Request $request){

        $dias = $request->dias;
        $resultado = $request->resultado;


        $resultado = ($dias/30);

    
        return view ('dever1.resultado13', compact('resultado', ));

    }




    public function ex14()
    {
        return view('dever1.ex14');
    }
    public function resultado14(Request $request){

        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        $resultado = $request->resultado;


        $resultado = (($nota1*2) + ($nota2*3) + ($nota3*5))/10;

    
        return view ('dever1.resultado14', compact('resultado', ));

    }

    public function ex16()
    {
        return view('dever1.ex16');
    }
    public function resultado16(Request $request){
        $nome = $request->nome;
        $salario = $request->salario;
        $vendas = $request->vendas;
        $percentual = $request->percentual;
        $resultado = $request->resultado;


       $resultado = $vendas/100*2+$salario;

    
        return view ('dever1.resultado16', compact('resultado', 'nome' ));

    }

    public function ex17()
    {
        return view('dever1.ex17');
    }
    public function resultado17(Request $request){
        $nome = $request->nome;
        $distancia = $request->distancia;
        $tempo = $request->tempo;
        $resultado = $request->resultado;


       $resultado = $distancia/$tempo;

    
        return view ('dever1.resultado17', compact('resultado', 'nome' ));

    }



    }



    

