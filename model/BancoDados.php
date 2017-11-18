<?php


 class BancoDados{
    public $server='127.0.0.1';
    public $user='root';
    public $senha='';
    public $db='json';


    //public function __construct($server, $user, $senha, $db) {
    //    $this->server = $server;
    //    $this->user = $user;
    //    $this->senha = $senha;
    //    $this->db = $db;
    //}






    public function Conectar() {

            //$server='127.0.0.1';
            //$user='root';
            //$senha='';
            //$db='json';

            try {

              $link = new PDO('mysql:host='.$this->server.';dbname='.$this->db,$this->user,$this->senha);

              return $link;

            } catch (PDOException $e) {
             echo "Conection falied database:". $e->getMessage();
            }

    }



    }

    




?>



