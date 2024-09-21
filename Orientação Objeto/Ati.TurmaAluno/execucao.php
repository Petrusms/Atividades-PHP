<?php 

require_once("modelo/Aluno.php");
require_once("modelo/Turma.php");

$turma = new Turma();
$turma->setNome(readline("Qual o nome do curso?"))->setCurso(readline("Qual o curso onde você cursa?"));

for($i=1; $i<=5; $i++) {
    $aluno = new Aluno();
    $aluno->setNome(readline("Informe o nome: "));
    $aluno->setIdade(readline("Informe a idade: "));
    $aluno->setTurma($turma);

    $turma->add($aluno);
}

print("\n\nDados da turma:\n");
print("Nome: " . $turma->getNome() . " | Curso: " . $turma->getCurso() . "\n");

print("Alunos:\n");
foreach($turma->getArray() as $dados)
    print(" - " . $dados->getNome() . ", " . $dados->getIdade() . " anos\n");
?>
