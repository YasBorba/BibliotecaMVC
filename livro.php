<?php
// defina uma classe chamada aluno 
class Livro{
    //criar uma propriedade privada(encapsulamento) chamada $alunos
    // essa propriedade é um array que armazena dados e alunos.
    // cada aluno é representado por um array associativo com nome e idade
    private $livros = [
        ['titulo' => 'Melhor do que nos filmes', 'autor'=> 'Lynn Painter', 'ano publicado' => 2023],
        ['titulo' => 'Rainha Vermelha', 'autor'=> 'Victoria Aveyard' ,'ano publicado' => 2015],
        ['titulo' => 'Jogos Vorazes', 'autor'=> 'Suzanne Collins', 'ano publicado' => 2012],
        ['titulo' => 'O Acordo', 'autor'=> 'Elle Kennedy', 'ano publicado' => 2012],
        ['titulo' => 'Pessoas Normais', 'autor'=> 'Sally Rooney', 'ano publicado' => 2018],
    ];

// define um metodo publico chamado listarAlunos.
// esse metodo serve para "retornar" o conteudp do array $alunos

public function listarLivros(){
    return $this->livros;
}
}
?>