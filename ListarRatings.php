        
        <title>Listar Ratings</title>
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.min.css">
         
          <table border="1" class="table-responsive" style="border:solid;width: 100%; border-style:inset; background-color:#3071a9;height: 120px;direction:initial" >
            <thead>    
                <tr  style="font-size:50px">
                    <th class="text-center">Listar Ratings</th>
                </tr>
            </thead>

          </table>
         <br/>

  
        <br/>
           
       
    
        <?php
               
                      
             require './controller/RatingsController.php';   
          
             
          echo"<table  border='1' class='table table-bordered table-responsive'  >
                <thead>
                <tr>
                    <th>Movie</th>
                    <th>Score</th>
                    <th>TimeStamp</th>
                    <th>User</th>
                    <th>Ip da Máquina</th>
                    
                </tr>
                </thead>";
            
      
        
        $controle= new RatingsController();
        $query=$controle->GetData();
        
        
        foreach ($query as $row) {
                              
          
                echo
                "<tbody>
                    <tr>
                        <td>".$row['title']."</td>
                        <td>".$row['score']."</td>
                        <td>".$row['timestamp']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['ip']."</td>
                        <td><a id='editar' runat='server' href='CadastroRatings.php?id=".$row['id']."&movieId=".$row['movie']."&movie=".$row['title']."&score=".$row['score']."&timestamp=".$row['timestamp']."&userId=".$row['user']."&user=".$row['name']."&ip=".$row['ip']."' class='glyphicon glyphicon-pencil' title='Editar'></a></td>
                        <td><a id='excluir' runat='server' href='DeletarRatings.php?id=".$row['id']."' title='Deletar' class='glyphicon glyphicon-remove'></a></td>
                    </tr> 
                </tbody>";
                       
        }
               
              echo"</table>
                    <br/>
                    <div class='text-center'>
                        <a href='CadastroRatings.php'><input type='submit' value='Adcionar' name='adicionar' class='btn-primary btn-lg' /></a>
                    </div>";
               
               echo "<br/> <div class='text-center'>
                        <a href='index.php'><input type='submit' value='Voltar Inicio' name='voltar' class='btn-primary btn-lg' /></a>
                    </div>";
             
             
         
         
         
        
        
        
        
        ?> 




       
