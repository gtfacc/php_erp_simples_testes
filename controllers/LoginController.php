<?php

require_once(dirname(__DIR__)."/database/connection.php");

/*
    SQL
    FUNÇÕES: SELECT, INSERT, UPDATE E DELETE
*/

function auth($email,$password){
    $connection = connectDB();

    $sql = "select * from users where email=:email";

    $stmt = $connection->prepare( $sql );
    $stmt->execute( array( 'email' => $email ) );

    if ( $row = $stmt->fetch() ){
      $password_hash = $row["password"];
      if ( password_verify( $password, $password_hash ) ) {
        session_start();
        $_SESSION["user_id"]=$row["id"];
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
}

