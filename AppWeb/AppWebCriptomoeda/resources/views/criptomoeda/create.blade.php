@extends('layouts.app')

@section('content')

<h1>Nova Criptomoeda</h1>

<form method="post" action="{{ route('criptomoedas.store') }}">
@csrf
<div class="mb-3">
    <label>Sigla</label>
    <input type="text" name="sigla" class="form-control" required>
</div>

<div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control"required>
</div>

<div class="mb-3">
    <label>Valor</label>
    <input type="number" name="valor" class="form-control"required>
</div>

<button type="submit" class="btn btn-primary"> Cadastrar </button>
<a href="{{ route('criptomoedas.index') }}" class="btn btn-secondary"> Cancelar </a>  

</form>
@endsection