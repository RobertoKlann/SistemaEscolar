@extends('ViewPadrao')

@section('content')
<br>

<div class="container">
    <div class="form-group">
        <label for="alucodigo">Codigo</label>
        <input style="width: 100px;" type="number" class="form-control" id="alucodigo" name="alucodigo"  placeholder="Código">
    </div>
    <div class="form-group">
        <label for="alunome">Nome</label>
        <input style="width: 400px;" type="text" class="form-control" id="alunome" name="alunome" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="alucpf">CPF</label>
        <input style="width: 400px;" type="text" class="form-control" id="alucpf" name="alucpf" placeholder="000.000.000-00">
    </div>
    <div class="form-group">
        <label for="aluemail">E-mail</label>
        <input style="width: 400px;" type="email" class="form-control" id="aluemail" name="aluemail" placeholder="example@gmail.com">
    </div>
    <div class="form-group">
        <label for="alufone">Telefone</label>
        <input style="width: 400px;" type="text" class="form-control" id="alufone" name="alufone" placeholder="(47)3521-2230">
    </div>
    <div class="form-group">
        <label for="aludatanasc">Data Nascimento</label>
        <input style="width: 400px;" type="date" class="form-control" id="aludatanasc" name="aludatanasc" placeholder="">
    </div>

    <button type="submit" id="confirmar" class="btn btn-default">Confirmar</button>
    <a class="btn btn-default" href = "">Cancelar</a>
    <button class="btn btn-default">Limpar</button>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Clientes.js"></script>
@endsection
