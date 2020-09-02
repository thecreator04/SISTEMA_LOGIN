<?php 
ob_start();
session_start();
$var_senhaL = isset($_POST["senhaL"])?$_POST["senhaL"]:"[Salário não informado]";
$var_emailL = isset($_POST["emailL"])?$_POST["emailL"]:"[Nº de dependentes não foi informado]";
$var_dadosL = $var_emailL."|".md5($var_senhaL)."\r\n";
$importando = file('./cadastrados.txt');
$igual =0;
$desigual =0;
foreach($importando as $linha)
{
if($var_dadosL == $linha){
$igual = $igual+1;
echo"$igual";
}
else{
}
if($igual>0){
header('location:verify.php');
}
else{
}
}
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
                  <form id="formulario" method="post"  >

                     

                      <div class="box">
                          <label for="email">email:<em class="required"></em></label>
                          <input name="emailL" id="emailL" type="email"  />
                      </div>


                      <div class="box">
                          <label for="senha">senha:<em class="required"></em></label>
                          <input name="senhaL" id="senhaL"  type="password"  />
                        </div>

                       
                        <!--- <input name="Calcular" id="calcular"  type="submit"/>--->
                        <button type="submit" name="entrar" id="entrar" class="btn btn-primary">entrar</button>
                        

                          <!-- 1 caso campo não for digitado-->
                          <div class="empty"></div>

                          <h6>Se você não possui uma conta, clique aqui --> <a href="https://thiago0307.000webhostapp.com/registrar.php" target="_self" title="Registrar" id="click">Registrar</a></h6>
                      </div>
                    
             

                  </form>
        
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                
        </body>

</html>