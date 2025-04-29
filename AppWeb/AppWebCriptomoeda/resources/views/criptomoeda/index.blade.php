@extends('layouts.app')
@section('content')

<h1> Lista de Criptomoedas </h1>
<a href="{{ route('criptomoedas.create') }}" class="btn btn-primary btn-lg" >Cadastrar</a>
@if(count($criptos))
<table class="table">
    <thead>
        <tr>
            <th scope="col">sigla</th>
            <th scope="col">nome</th>
            <th scope="col">valor</th>
            <th scope="col">Opções</th>
        </tr>
    </thead>
    <tbody>

        @foreach($criptos as $cripto)
        <tr>
            <th scope="row">{{$cripto['sigla']}}</th>
            <td>{{$cripto['nome']}}</td>
            <td> R$ {{number_format($cripto['valor'],2, ',','.')}} </td>
            <td>
                <a href="{{route('criptomoedas.edit', $cripto['id'])}}" class="btn btn-warning btn-sm"> Editar</a>
                <a href="{{route('criptomoedas.destroy', $cripto['id'])}}" class="btn btn-warning btn-sm" onclick="return confirm('Tem certeza?')"> Excluir</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@else

<p>Nenhuma Criptomoeda</p>

@endif

@endsection