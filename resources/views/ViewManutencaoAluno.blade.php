@extends('ViewPadrao')

@section('content')
<br>

<div class="container">
    <div class="form-group">
        <label for="alnnome">Nome</label>
        <input style="width: 400px;" type="text" class="form-control" id="alnnome" name="alnnome" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="alncpf">CPF</label>
        <input style="width: 400px;" type="text" class="form-control" id="alncpf" name="alncpf" placeholder="000.000.000-00">
    </div>
    <div class="form-group">
        <label for="alnemail">E-mail</label>
        <input style="width: 400px;" type="email" class="form-control" id="alnemail" name="alnemail" placeholder="example@gmail.com">
    </div>
    <div class="form-group">
        <label for="alnfone">Telefone</label>
        <input style="width: 400px;" type="text" class="form-control" id="alnfone" name="alnfone" placeholder="(47)3521-2230">
    </div>
    <div class="form-group">
        <label for="alndatanascimento">Data Nascimento</label>
        <input style="width: 400px;" type="date" class="form-control" id="alndatanascimento" name="alndatanascimento" placeholder="">
    </div>

    <button type="submit" id="confirmar" class="btn btn-default">Confirmar</button>
    <a class="btn btn-default" href = "">Cancelar</a>
    <button class="btn btn-default">Limpar</button>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="js/mask.js"></script>
<script type="text/javascript" src="js/Alunos.js"></script>
@endsection
