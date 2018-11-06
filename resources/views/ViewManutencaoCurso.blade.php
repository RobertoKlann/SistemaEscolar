@extends('ViewPadrao')

@section('content')
<br>

<div class="container">
    <div class="form-group">
        <label for="crocodigo">Codigo</label>
        <input style="width: 100px;" type="number" class="form-control" id="crocodigo" name="crocodigo"  placeholder="Código">
    </div>
    <div class="form-group">
        <label for="cronome">Nome</label>
        <input style="width: 175px;" type="date" class="form-control" id="cronome" name="cronome" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="crodescricao">Descrição</label>
        <input style="width: 175px;" type="date" class="form-control" id="trmdatafinal" name="trmdatafinal" placeholder="Descrição">
    </div>
    <div class="form-group">
        <label for="crototalhoras">Total de Horas</label>
        <input style="width: 100px;" type="text" class="form-control" id="crototalhoras" name="crototalhoras" placeholder="100 horas">
    </div>
    <div class="form-group">
        <label for="cromensalidade">Total de Horas</label>
        <input style="width: 100px;" type="text" class="form-control" id="cromensalidade" name="cromensalidade" placeholder="R$800,00">
    </div>

    <button type="submit" id="confirmar" class="btn btn-default">Confirmar</button>
    <a class="btn btn-default" href = "">Cancelar</a>
    <button class="btn btn-default">Limpar</button>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Clientes.js"></script>
@endsection
