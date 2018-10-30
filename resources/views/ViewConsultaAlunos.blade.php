@extends('ViewPadrao')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome Companhia</th>
                <th>Nome Contato</th>
                <th>Titulo</th>
                <th>Endereco</th>
                <th>Cidade</th>
                <th>Região</th>
                <th>Cep</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>


@endsection

@section('scripts')
<script type="text/javascript" src="js/Clientes.js"></script>
@endsection
