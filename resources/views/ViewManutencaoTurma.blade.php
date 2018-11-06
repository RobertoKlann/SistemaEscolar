@extends('ViewPadrao')

@section('content')
<br>

<div class="container">
    <div class="form-group">
        <label for="trmcodigo">Codigo</label>
        <input style="width: 100px;" type="number" class="form-control" id="trmcodigo" name="trmcodigo"  placeholder="Código">
    </div>
    <div class="form-group">
        <label for="trmprofessor">Professor</label>
        <select style="width: 300px;" type="text" class="form-control">
            <option value="volvo">Professor um</option>
            <option value="saab">Professor um</option>
            <option value="mercedes">Professor um</option>
        </select>
    </div>
    <div class="form-group">
        <label for="trmcurso">Curso</label>
        <select style="width: 300px;" type="text" class="form-control">
            <option value="volvo">Curso um</option>
            <option value="saab">Curso um</option>
            <option value="mercedes">Curso um</option>
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
<script type="text/javascript" src="js/Clientes.js"></script>
@endsection
