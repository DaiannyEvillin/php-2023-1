<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Bem vindo</h1>
  <? if(isset($_SESSION['logado'])) {
     echo '<h3>Controle de Alunos</h3>
     <a href="cadastrar_aluno.html">Cadastro de aluno</a> <br>
     <a href="listar_alunos.php">Listar alunos</a> <br><br>';

     echo '<h3>Controle de Curso</h3>
      <a href="cadastrar_curso.html">Cadastro de curso</a> <br>
      <a href="listar_cursos.php">Listar Cursos</a> <br><br>';

     echo '<h3>Controle de Turma</h3>
     <a href="cadastrar_turma.php">Cadastro de turma</a> <br>
     <a href="listar_turmas.php">Listar turmas</a> <br><br>';

     echo '<h3>Controle de Matrícula</h3>
     <a href="cadastrar_matricula.php">Realizar matrícula</a> <br>
     <a href="listar_matriculas.php">Listar matrículas</a> <br><br>
    <form action="sair.php" method="get"><input type="submit" name="acao" value="Sair"></input ></form>';
    }
    ?>

</body>

</html>