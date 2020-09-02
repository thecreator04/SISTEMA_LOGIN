<?php 
session_start();

echo" <a href='index.php' id='back' > <img id='back' src='./img/botao.png' style=';margin:10px;,'></a>";
?>


<html>
    <head>   
        <meta charset = "utf-8"/>
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body >
    <div class="container-fluid">
        
    
         <div id="align" class="col-md-6" >
                  <form id="formulario" method="post" action="verify.php" >

                      <div class="box">
                
                          <label for="nome"> <em class="required"></em></label>
                          <input name="nome"  id="nome" type="text" placeholder="insira o seu nome"  />
                      </div>

                      <div class="box">
                          <label for="email"><em class="required"></em></label>
                          <input name="email" id="email" type="email" placeholder="insira o seu email"  />
                      </div>


                      <div class="box">
                          <label for="senha"><em class="required"></em></label>
                          <input name="senha" id="senha"  type="password" placeholder="insira o seu sua senha" />
                       <div>

                       
                        <!--- <input name="Calcular" id="calcular"  type="submit"/>--->
                          
                          <button type="submit" name="registrar" id="registrar" class="btn btn-primary">Registrar</button>
                          <!-- 1 caso campo não for digitado-->
                          <div class="empty">


                      </div>

                          

                        

                  </form>
        
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                
        </body>

</html>