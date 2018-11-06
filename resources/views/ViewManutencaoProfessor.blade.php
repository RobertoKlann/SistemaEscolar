@extends('ViewPadrao')

@section('content')
<br>

<div class="container">
    <div class="form-group">
        <label for="prfcodigo">Código</label>
        <input style="width: 100px;" type="number" class="form-control" id="prfcodigo" name="prfcodigo"  placeholder="Código">
    </div>
    <div class="form-group">
        <label for="prfnome">Nome</label>
        <input style="width: 400px;" type="text" class="form-control" id="prfnome" name="prfnome" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="prffone">Fone</label>
        <input style="width: 400px;" type="text" class="form-control" id="prffone" name="prffone" placeholder="(47)3521-2230">
    </div>
    <div class="form-group">
        <label for="prfemail">E-mail</label>
        <input style="width: 400px;" type="email" class="form-control" id="prfemail" name="prfemail" placeholder="example@gmail.com">
    </div>
    <div class="form-group">
        <label for="prfcurriculo">Telefone</label>
        <input style="width: 400px;" type="text" class="form-control" id="prfcurriculo" name="prfcurriculo" placeholder="Curriculo">
    </div>

    <button type="submit" id="confirmar" class="btn btn-default">Confirmar</button>
    <a class="btn btn-default" href = "">Cancelar</a>
    <button class="btn btn-default">Limpar</button>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Clientes.js"></script>
@endsection
