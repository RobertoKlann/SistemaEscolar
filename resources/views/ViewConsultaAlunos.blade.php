@extends('ViewPadrao')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>

@endsection

@section('scripts')
<script type="text/javascript" src="js/Alunos.js"></script>
@endsection
