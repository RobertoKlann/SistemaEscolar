@extends('ViewPadrao')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Professor</th>
                <th>Curso</th>
                <th>Data Inicio</th>
                <th>Data Final</th>
                <th>Total em Horas</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>


@endsection

@section('scripts')
<script type="text/javascript" src="js/Turmas.js"></script>
@endsection
