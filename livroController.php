<?php
//incluir o arquivo 'aluno.php' que contem a classe Aluno.
//incluir o alunoView.php, que contem a função exibirAlunos().
require_once 'livro.php';
require_once 'livrosView.php';

//declaraçao da classe alunoController
//essa classe e responsavel pela comunicaçao entre o aluno.php(model) e o alunosView.php (view)

class livroController{
    //criar uma propriedade privada chamada $model
    //ela sera usada para armazenar uma instancia da classe aluno

    private $model;

    //criar um metodo constructor da classe, ele é chamado automaticamente quando um objeto foi criado
    public function __construct()
    {
        //criar uma nova instancia da classe aluno, e armazenar na propriedade $model
        $this->model= new Livro();
    }
    //metodo publico chamado listar
    //ele serve para buscar a lista de alunos e passar para o view
    public function listar(){
        //chama o metodo listarAlunos()do modelo e armazena na variavel $alunos
        $alunos = $this->model->listarLivros();
        //chama a funçao exibir alunos e envia a lista para mostrar no navegador
        exibirLivros($alunos);
    }
}
//execuçao do codigp
//aqui fora da classe é criado um objeto do tipo AlunoController.
$controler = new livroController();
//apos criar o objeto, é chamado o metodo listar();
$controler->listar();
?>