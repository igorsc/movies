 <title>Cadastrar Ratings</title>
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="Content/bootstrap.min.css">

        <!-- <script type="text/javascript">
         
             function  changeItem(s,v) {
              
               for ( var i = 0; i <s.options.length; i++) {
                    if ( s.options[i].value === v ) {
                        s.options[i].selected = true;
                        return s.options[i].value;
                    }
                }

             }

         </script>-->
         
         
          <table border="1" class="table-responsive" style="border:solid;width: 100%; border-style:inset; background-color:#3071a9;height: 120px;direction:initial" >
            <thead>    
                <tr style="font-size:50px">
                    <th class="text-center">Cadastrar Ratings</th>
                </tr>
            </thead>

        </table>
         
       
        
         
      

<?php

require './DTO/Ratings.php';
require './controller/RatingsController.php' ;

//$pessoa = new Pessoa();
$controleratings= new RatingsController();


$ratings = new Ratings();
$ratings->Id = $_REQUEST['id'];

  $listMovies  = $controleratings->GetDataMovies();
  $listUsers  = $controleratings->GetDataUsers();
  
 
if($ratings->Id>0){
     //$itemMovie=$controleratings->getByMovie($ratings->Id);
   	 //$itemUser= $controleratings->getByUser($ratings->Id);
    
    $movie=$_REQUEST['movie'];
    $user=$_REQUEST['user'];
     
    
    
    $ratings->MovieId=$_REQUEST['movieId'];
    $ratings->Score=$_REQUEST['score'];
    $ratings->TimeStamp=$_REQUEST['timestamp'];
    $ratings->UserId=$_REQUEST['userId'];
    $ratings->Ip=$_REQUEST['ip'];
    
  
    




    //id=".$row['id']."&movieId=".$row['movie']."&movie=".$row['title']."&timestamp=".$row['timestamp']."&userId=".$row['user']."&user=".$row['name']."&ip=".$row['ip']." 
  
    
    echo " <form action='CadastroRatingsAtlz.php?id=$ratings->Id&movieId=$ratings->MovieId&score=$ratings->Score&timestamp=$ratings->TimeStamp 
        &userId=$ratings->UserId&ip=$ratings->Ip&movie=$movie&user=$user' method='post'>
            <div class='row'>
                <div class='col-md-6'>   
                    <label id='lblMovie' class='text-left form-inline' style='color: blue'>Movie</label>
                    ";?> <select id='ddlMovie' name='movieId' onchange="changeItem(this,this.value);"   class='form-control'>
                    <option value='0' >Selecione...</option>
                    <?php
                    foreach ($listMovies as $value) {
                        
                        if ($value['id']==$ratings->MovieId) {
                             echo "<option value=".$value['id']." selected >".$value['title']."</option>";
                        }else{
                            
                             echo"
                                <option value=".$value['id']." >".$value['title']."</option>" ; 
                            
                        }
        
                       
                           
                            
                    }
    
                   
    echo        "</select>
                </div>
                <div class='col-md-6'>    
                    <label id='lblScore' class='text-left form-inline' style='color: blue'>Score</label>
                    <input name='score' id='txtScore' type='text' class='form-control' value='$ratings->Score' />
                </div>
            </div>
            <div class='row'>
                <div class='col-md-6'>    
                    <label id='lblTimeStamp' class='text-left form-inline' style='color: blue'>TimeStamp</label>
                    <input name='timestamp' id='txtTimeStamp' type='text' class='form-control' value='$ratings->TimeStamp'/>
                </div>
                <div class='col-md-6'>    
                    <label id='lblUser' class='text-left form-inline' style='color: blue'>User</label>
                    ";?><select id='ddlUser' name='userId' onchange='changeItem(this,this.value);'    class='form-control'>
                        <option value='0' >Selecione...</option>
                        <?php

								  
						    foreach ($listUsers as $value){
								 if ($value['id']==$ratings->UserId) {
                                    echo "<option value=".$value['id']." selected >".$value['name']."</option>";
                              	 }
								 else{
                            		echo "<option value=".$value['id']." >".$value['name']."</option> "; 
								 }
                             }
                          
                          
    echo            "</select>                 
                </div>
            </div>
             <div class='row'>
                <div class='col-md-6'>    
                    <label id='lblIP' class='text-left form-inline' style='color: blue'>IP da Máquina</label>
                    <input name='ip' id='txtIp' type='text' class='form-control' value='$ratings->Ip'/>
                </div>
            </div>   
            <br/>
            <div class='text-center'>
                <input   id='btnSalvar' type='submit' value='Salvar' class='btn-primary btn-lg'/>
            </div>
        </form>
        <br/>
        <div class='text-center'>     
              <a href='ListarRatings.php'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a>
          </div>";   
    

    
    
     
} else if ($ratings->Id==0) {
    
    
    
     echo " <form action='CadastroRatingsInsert.php' method='post'>
            <div class='row'>
                <div class='col-md-6'>    
                   <label id='lblMovie' class='text-left form-inline' style='color: blue'>Movie</label>
                      ";?>
                      <select  id='ddlMovie' name='movieId' onchange='changeItem(this,this.value);'    class='form-control'>
                          <option value='0' >Selecione...</option>
                      <?php
                       foreach ($listMovies as $value) {
        
                            $movieIdKey= $value['id'];
                            echo"<option value=".$movieIdKey."   >".$value['title']."</option>"  ;
                       
                        }
                        
                       
                      
    
                  echo "</select>
                </div>
                <div class='col-md-6'>    
                    <label id='lblScore' class='text-left form-inline' style='color: blue'>Score</label>
                    <input name='score' id='txtScore' type='text' class='form-control'  />
                </div>
            </div>
            <div class='row'>
                <div class='col-md-6'>    
                    <label id='lblTimeStamp' class='text-left form-inline' style='color: blue'>TimeStamp</label>
                    <input name='timestamp' id='txtTimeStamp' type='text' class='form-control'/>
                </div>
                <div class='col-md-6'>    
                    <label id='lblUser' class='text-left form-inline' style='color: blue'>User</label>
                    ";?>
                    <select id='ddlUser' name='userId' onchange='changeItem(this,this.value);'     class='form-control'>
                       <option value='0' >Selecione...</option>
                       <?php
                       foreach ($listUsers as $value) {
        
                            $userIdKey=$value['id'];                            
                            echo "<option value=".$userIdKey." >".$value["name"]."</option>";
                            
                      }
                       
              echo  "</select>
               </div>
            </div>
             <div class='row'>
                <div class='col-md-6'>    
                    <label id='lblIP' class='text-left form-inline' style='color: blue'>IP da Máquina</label>
                    <input name='ip' id='txtIp' type='text' class='form-control' />
                </div>
             </div>
            <br/>
            <div class='text-center'>
                <input   id='btnSalvar' type='submit' value='Salvar' class='btn-primary btn-lg'/>
            </div>
        </form>
        <br/>
        <div class='text-center'>     
              <a href='ListarRatings.php'><input type='submit' value='Voltar' class='btn-primary btn-lg'/></a>
          </div>";   
    
      
      
      
      
      
    
 
}  





 
 
   
    
    
   
    
     

