@extends('ViewPadrao')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Fone</th>
                <th>E-mail</th>
                <th>Curriculo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>


@endsection

@section('scripts')
<script type="text/javascript" src="js/Professores.js"></script>
@endsection
