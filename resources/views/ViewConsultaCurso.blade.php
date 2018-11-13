@extends('ViewPadrao')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Mensalidade</th>
                <th>Total em Horas</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>


@endsection

@section('scripts')
<script type="text/javascript" src="js/Cursos.js"></script>
@endsection
