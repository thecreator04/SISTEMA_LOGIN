<?php 
session_start();



echo" <a href='index.php' id='icon' > <img id='back' src='./img/icon.png' style=';margin:10px;,'></a>";
?>


<html>
    <head>

    <meta charset = "utf-8"/>
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body background="./img/fundo.jpg"  background-attachment="fixed";>

    
<div class="container-fluid">
            

    <div id=textintro>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/old1.jpg" class="block"  alt="...">
    </div>
    
    <div class="carousel-item">
      <img src="./img/old2.jpg" class="block"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/old3.jpg" class="block"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/old5.jpg" class="block"  alt="...">
    </div>
   
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>

    




    </div>
            <?php

            
           ini_set('display_errors', 0 );
            error_reporting(0);

            echo"<h1>Relíquias Abandonadas</h1>";

            echo"<p>Sempre é muito triste quando vemos máquinas que eram extremamente famosas 
            se tornarem inutilizadas. Quando pensamos em carros abandonados,
             e todas as emoções que eles despertam principalmente em nós, entusiastas, a 
             sensação é ainda mais lamentável. Mas também é interessante observar o destino
              que alguns deles acabam obtendo, até porque em alguns casos, ainda é possível 
              fazer uma restauração. Quem acompanha exposições de carros antigos sabe
               perfeitamente os milagres que colecionadores conseguem realizar, preservando
                a história, mas muitos destes veículos acabam sendo abandonados e esquecidos junto com o tempo.</p>";
            
            $var_nome = isset($_POST["nome"])?$_POST["nome"]:"[Nome não informado]";
            $var_senha = isset($_POST["senha"])?$_POST["senha"]:"[login]";
            $var_email = isset($_POST["email"])?$_POST["email"]:"[senha login]";
      
           
           
 // condições na inserção de dados do formulario
                if(empty($var_nome)){
                //caso não seja informado o nome será redirecionado para página até que insira um nome.
                        header('location:registrar.php');

                }

                if(empty($var_senha)){
                //caso não seja informado o nome será redirecionado para página até que insira um valor.
                    header('location:registrar.php');

                }
               
                if(empty($var_email)){
                    //caso não seja informado o nome será redirecionado para página até que insira um valor.
                        
    
                    }
                    else{

                    

                    $var_dados = $var_email."|".md5($var_senha)."\r\n";

                    $cadastrados = "cadastrados.txt";

                    $open_file=fopen($cadastrados,'a');

                    fwrite($open_file,$var_dados);
                    //função para fechar o documento aberto.
                    fclose($open_file);


                    $var_senhaL = isset($_POST["senhaL"])?$_POST["senhaL"]:"[Senha não informada]";
                    $var_emailL = isset($_POST["emailL"])?$_POST["emailL"]:"[Email não informado]";
                    }
                


                    
              ?>  

           

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>


</html>