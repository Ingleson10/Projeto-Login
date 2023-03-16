<?php
require_once 'config.php';
class DB{
    private static $instance; // conexão single ( se ja existir, não vai precisar se conectar dnv )
    public static function getInstance(){
        if(!isset(self::$instance)){
            try{
                self::$instance = new PDO('mysql:host=localhost;dbname=projeto_login',DB_USER ,DB_USER);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            }catch (PDOException $e){
                echo $e->getMessage(); // retorna erro caso não der certo.
            }
        }
        return self::$instance;
    }
    public static function prepare($sql){ // faço static pra não ficar chamando toda hr o obg.
        return self::getInstance()->prepare($sql); //getinstance pra ir mais rapido , eu chamar só a classe db ( exemplo DB::prepare($sql) )
    }
}