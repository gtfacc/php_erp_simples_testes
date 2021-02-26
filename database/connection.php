<?php
function connectDB(){

    $dsn = 'mysql:host=localhost;dbname=erp_simples';
    $username = 'erp_simples';
    $password = 'Teste1';

    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ); 
  
    try {
      $connection = new PDO($dsn, $username, $password, $options);
      return $connection;
    } catch (\Exception $e){ //excessoes em php
     die("Não foi possível conectar na base de dados, verifique os dados de acesso.");
    }

}

