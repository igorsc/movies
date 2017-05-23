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

//$pessoa = new Pessoa();
$controlemovies= new UsersController();


$users = new Users();
$users->Id = $_REQUEST['id'];

if($users->Id>0){
    
    
   
    $users->Name=$_REQUEST['name'];
    $users->Email=$_REQUEST['email'];
    
    
  
    
    echo " <form action='CadastroUsersAtlz.php?id=$users->Id&name=$users->Name&email=$users->Email' method='post'>
            <div class='row'>
                <div class='col-md-6'>    
                    <label id='lblName' class='text-left form-inline' style='color: blue'>Name</label>
                    <input name='name' id='txtName' type='text' class='form-control' value='$users->Name'/>
                </div>
                <div class='col-md-6'>    
                    <label id='lblEmail' class='text-left form-inline' style='color: blue'>Email</label>
                    <input name='email' id='txtEmail' type='text' class='form-control' value='$users->Email' />
                </div>
            </div>
            <br/>
            <div class='text-center'>
                <input   id='btnSalvar' type='submit' value='Salvar' class='btn-primary btn-lg'/>
            </div>
        </form>
        <br/>";
    echo "<div class='text-center'>     
              <a href='ListarUsers.php'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a>
          </div>";   
    

    
    
     
} else if ($users->Id==0) {
    
    
    
     echo " <form action='CadastroUsersInsert.php' method='post'>
            <div class='row'>
                <div class='col-md-6'>    
                    <label id='lblName' class='text-left form-inline' style='color: blue'>Name</label>
                    <input name='name' id='txtName' type='text' class='form-control'/>
                </div>
                <div class='col-md-6'>    
                    <label id='lblEmail' class='text-left form-inline' style='color: blue'>Email</label>
                    <input name='email' id='txtEmail' type='text' class='form-control'  />
                </div>
            </div>
            <br/>
            <div class='text-center'>
                <input   id='btnSalvar' type='submit' value='Salvar' class='btn-primary btn-lg'/>
            </div>
        </form>
        <br/>";
    echo "<div class='text-center'>     
              <a href='ListarUsers.php'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a>
          </div>";   
    
 
}  





 
 
   
    
    
   
    
     

