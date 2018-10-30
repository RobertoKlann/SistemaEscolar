<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Escolar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
    <div style="background-color: #F5F5F5;">

            <div class ="container">
                <div class ="navbar-header">
                    <a href ="/consultaPadrao" class ="navbar-brand">Sistema Escolar</a>
                </div>
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Alunos</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/consultaAlunos" id="buscar">Consultar Alunos</a>
                            <a class="dropdown-item" href="/cadastroAlunos">Cadastrar Aluno</a>
                          </div>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cursos</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/consultaCurso" id="buscar">Consultar Cursos</a>
                            <a class="dropdown-item" href="/cadastroCurso">Cadastrar Curso</a>
                          </div>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Professores</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/consultaProfessor" id="buscar">Consultar Professores</a>
                            <a class="dropdown-item" href="/cadastroProfessor">Cadastrar Professor</a>
                          </div>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Turmas</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/consultaTurma" id="buscar">Consultar Turmas</a>
                            <a class="dropdown-item" href="/cadastroTurma">Cadastrar Turma</a>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
            @yield('content')
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/jQuery.js"></script>
    @yield('scripts')

</body>
</html>
