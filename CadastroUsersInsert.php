 <title>Cadastrar Users</title>
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.min.css">

          <table border="1" class="table-responsive" style="border:solid;width: 100%; border-style:inset; background-color:#3071a9;height: 120px;direction:initial" >
            <thead>    
                <tr  style="font-size:50px">
                    <th class="text-center">Cadastrar Users</th>
                </tr>
            </thead>

        </table>
         


<?php

require './DTO/Users.php';
require './controller/UsersController.php' ;


$controleusers= new UsersController();


$users = new Users();
    
    
   
    $users->Name=$_POST['name'];
    $users->Email=$_POST['email'];
    
    
    try {
     
         
          
          if($users->Name!='' && $users->Email!='' ){        
                       
                   $controleusers->Salvar(isset($_GET['id']),$users->Name,$users->Email);
                   
                   
                   echo" <div class='text-center'><label class='alert alert-success alert-dismissible fade in' role='alert'><h3>Salvo com sucesso!</h3></lable></div>";
                  
                   echo "<div class='text-center'> <a href='CadastroUsers.php?id=$users->Id&name=$users->Name&email=$users->Email'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ;
                    
                    
              
          }
          else
          {
             echo "<div class='text-center'><label class='alert alert-danger alert-dismissible fade in' role='alert'><h3>Nao foi possivel salvar.</h3></a></div>";
             echo "<div class='text-center'><a href='CadastroUsers.php'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a></div>" ;
          } 
          
       } catch (Exception $ex) {
          echo 'Error:'.$ex->getMessage();
       }       
 





 
 
   
    
    
   
    
     

