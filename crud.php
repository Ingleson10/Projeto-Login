<?php
require_once 'DB.php'; // conexão.

abstract class Crud extends DB{ // ELA VAI HERDAR TUDO QUE TEM EM DB
    protected $table; // vai poder usar pelos filhos , pelo privado somente a classe vai usar . Seria mais util.
    abstract public function insert();
    abstract public function update($id);

    public function find($id){ //vai pegar pelo id ( 1 valor )
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql); // preparando para poder inserir;
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function findAll(){ // todos valores.
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    // fazer o delete.
    /*public function delete($id){

    }*/

}