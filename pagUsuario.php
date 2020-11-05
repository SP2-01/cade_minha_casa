<?php


$servername = "localhost";
$username="root";
$passaword="";
$database="";

$conn=mysqli_connect($servername,$username,$passaword,$database);  
if(!$conn){
  die("A conexão falou".msqli_connect_error());
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./image/logo.png">
    <link rel="stylesheet" href="MEstilo.css">
    <title> Cadê Minha Casa? </title>
    
</head>
    
<body>
    <header>
            <nav>
                <div class="container-fluid">
                    <div>
                        <a href="index.html">
                            <img src="./image/Logo completo.png" alt="Página inicial" class="logo-item">
                        </a>
                    </div>
                    <div class="item-cad"><a href="index.html">Home</a></div>
                    <div class="item-login"><a href="denuncia.html">Denúncia</a></div>
                </div>
            </nav>
</header>
    
 
    
<section id="corpo">
    
    
    
    <div id="junto" >
     <ul>
            <li > Imovéis cadastrados </li> <br>
            
     </ul>
    </div>
    
</section>
    
    
<aside id="lateral">
    
      <h1>Agradecemos seu apoio!</h1>
    
    <?php
    
        $sql = "select * from ";
        $result = $conn->query($sql);
    
        if($result->num_row>0){
        while ($row = $result->fetch_assoc()){
            
               ?>  
    
 <br> 
           
<div>
    <div class="box_denuncia" id="<?php echo $row["minhas"]?>" style="display:block;">
        <img src="<?php echo $row["imagem"]?>" onclick="destaque(this)">
          <div class="inf">
            <h4><?php echo $row["lagradouro"]?></h4>
            <hr>
            <p ><?php echo $row["numero"]?></p>
            <p ><?php echo $row["complemento"]?></p>
            <p ><?php echo $row["bairro"]?></p>
            <p ><?php echo $row["cep"]?></p>
          </div>
    </div>   
    
</div>
    
    
    <?php  
            
        } 
        }else{
        echo"Nunhum imovel cadastrado ";  
        }
                
        ?>
    
        
</aside>
    
    
    </body>   
    
    
 <footer>
        <div class="container-fluid">
            <p id="rodape">&copy; Todos os direitos reservados.</p>

        </div>

</footer>
            