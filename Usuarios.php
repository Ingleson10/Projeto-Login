<?php
require_once 'crud.php';

class Usuarios extends Crud{ //ela vai herdas as coisas que eu ja defini no crud.php

    protected $table =  'usuarios'; // a tabela que eu tenho no banco.
    // só vai setar valores nessa classe ( usuarios )
    private $nome;
    private $idade;
    private $email;
    private $senha;


    // EU NÃO VOU FAZER A VALIDAÇÃO ( DADOS VAZIOS POR EXEMPLO , MAS SERIA AQUI DENTRO QUE TU FAZ )
    // seria possivel fazer tudo de uma vez , mas como é aprendizado é melhor ir com calma ..
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }



    public function insert() // insere
    {
        $sql = "INSERT INTO $this->table (nome,idade,email,senha) VALUES (:nome,:idade,:email,:senha)";
        $stmt = DB::prepare($sql); // ele vai la no DB , prepara o sql para executar .
        // pegando os valores
        $stmt->bindParam(':nome',$this->nome); // uso this pq ta privado , se não caso não precisava.
        $stmt->bindParam(':idade',$this->idade);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':senha',$this->senha);
        return $stmt->execute(); // vai rodar o sql
    }

    public function update($id) // da o update. ( não tem ainda eu sei , mas ja facilitei )
    {
        $sql = "UPDATE $this->table SET nome = :nome, idade = :idade,email = :email,senha = :senha where id = :id ";
        $stmt = DB::prepare($sql); // igual o de cima
        $stmt->bindParam(':nome',$this->nome);
        $stmt->bindParam(':idade',$this->idade);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':senha',$this->senha);
        $stmt->bindParam(':id',$id); // recebe la do parametro
        return $stmt->execute(); // vai rodar o sql
    }
}
?>