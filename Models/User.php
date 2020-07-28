<?php
include("Database/config.php");
//String urlDoWebService = "http://localhost/api_laercio/Models/User.php";
//StringRequest stringRequest;
//RequestQueue requestQueue;
class User
{
    public $nome;
    public $email;
    public $senha;
    private $con;
}

function __construct()
{
    $this->con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

}
 function inserir(){
    $sql = "INSERT INTO usuario VALUES(DEFAULT, 'nome', 'email', md5('senha'));";
    $resultSet = $this->con->query($sql);
    session_start();

}
function sair(){
    session_start();
    session_destroy();
}



