@extends('ViewPadrao')

@section('content')
<br>

<div class="container">
    <div class="form-group">
        <label for="trmprofessor">Professor</label>
        <select id="professores"  style="width: 300px;" type="text" class="form-control">
        </select>
    </div>
    <div class="form-group">
        <label for="trmcurso">Curso</label>
        <select id="cursos" style="width: 300px;" type="text" class="form-control">
        </select>
    </div>
    <div class="form-group">
        <label for="trmdatainicio">Data de Inicio</label>
        <input style="width: 175px;" type="date" class="form-control" id="trmdatainicio" name="trmdatainicio" placeholder="">
    </div>
    <div class="form-group">
        <label for="trmdatafinal">Data Final</label>
        <input style="width: 175px;" type="date" class="form-control" id="trmdatafinal" name="trmdatafinal" placeholder="">
    </div>
    <div class="form-group">
        <label for="trmtotalhoras">Total de Horas</label>
        <input style="width: 100px;" type="text" class="form-control" id="trmtotalhoras" name="trmtotalhoras" placeholder="100 Horas">
    </div>

    <button type="submit" id="confirmar" class="btn btn-default">Confirmar</button>
    <a class="btn btn-default" href = "">Cancelar</a>
    <button class="btn btn-default">Limpar</button>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Turmas.js"></script>
@endsection
