        
        <title>Listar Movies</title>
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.min.css">
         
          <table border="1" class="table-responsive" style="border:solid;width: 100%; border-style:inset; background-color:#3071a9;height: 120px;direction:initial" >
            <thead>    
                <tr  style="font-size:50px">
                    <th class="text-center">Listar Movies</th>
                </tr>
            </thead>

          </table>
         <br/>
<!--             <div  class="row">
                 
               <div class="col-md-3">
                    <input type="text" id="txtBuscar" name="search" class="form-control"/>
                </div>
                <div class="col-md-1">
                    <a href="#"><input type="submit" value="Buscar"   class="glyphicon glyphicon-search btn " /></a>
                </div>
                
             </div>-->
  
        <br/>
           
       
    
        <?php
               
                      
             require './controller/MoviesController.php';   
          
             
          echo"<table  border='1' class='table table-bordered table-responsive'  >
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Genres</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>";
            
      
        
        $controle= new MoviesController();
        $query=$controle->GetData();
        
        
        foreach ($query as $row) {
                              
          
                echo
                "<tbody>
                    <tr>
                        <td>".$row['title']."</td>
                        <td>".$row['genres']."</td>";
                        echo" <td><a id='editar' runat='server' href='CadastroMovies.php?id=".$row['id']."&title=".$row['title']."&genres=".$row['genres']."' class='glyphicon glyphicon-pencil' title='Editar'></a></td>
                        <td><a id='excluir' runat='server' href='DeletarMovies.php?id=".$row['id']."' title='Deletar' class='glyphicon glyphicon-remove'></a></td>
                    </tr> 
                </tbody>";
                       
        }
               
               echo"</table>
                    <br/>
                    <div class='text-center'>
                        <a href='CadastroMovies.php'><input type='submit' value='Adcionar' name='adicionar' class='btn-primary btn-lg' /></a>
                    </div>";
               
               echo "<br/> <div class='text-center'>
                        <a href='index.php'><input type='submit' value='Voltar Inicio' name='voltar' class='btn-primary btn-lg' /></a>
                    </div>";
             
             
         
         
         
        
        
        
        
        ?> 




       
