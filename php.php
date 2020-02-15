<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>LojaCar</title>

        <link href="Css/Home.css" rel="stylesheet" type="text/css"/>
        <?php 
            $carro = $_POST['carro'];
            $preco_carro = 0;
            $preco_ac = 0;
        ?>
    </head>
    <body>
    <div id="nome_site">
      <h1><B>LojaCar</B></h1>
    </div><br>
    <br>

    <fieldset>
    <form action="php.php" method="post">
    <center>
        <br>
    <h1 style="tnameext-align: left;">&#171;Sua Compra&#187;</h1>
    <br>
            <br>
            <img src="img/<?php echo $carro; ?>.jpg" widht='100' height='150'>
            <br><br>    
            <h3>PREÇO DO CARRO: <u class="underL" ></h3>
            <h3>R$:<?php 
                if($carro == "fiat")
                    $preco_carro = 34200;
                else if($carro == "ford")
                    $preco_carro = 45590;
                else if($carro == "chev")
                    $preco_carro = 38990;
                else if($carro == "ren")
                    $preco_carro = 30990;
                echo $preco_carro;
            ?></h3></u>
            <br>
            <h3>ACESSÓRIOS COMPRADOS:</h3>
            <u class="underL" ><h3><?php 
                if(isset($_POST['ac'])){
                    foreach($_POST['ac'] as $valor)
                    {
                        echo $valor,'<br>';
                        if($valor == "Alarme")
                            $preco_ac += 300;
                        else if($valor == "Fumê")
                            $preco_ac += 120;
                        else if($valor == "Ar Condicionado")
                            $preco_ac += 3200;
                        else if($valor == "Kit Multimídia")
                            $preco_ac += 2300;
                        else if($valor == "Motor")
                            $preco_ac += 6000;
                    }
                }
                else{
                    echo "Nenhum acessório comprado. <br>";
                }
            ?></h3></u>
            <br>
            <h3>PREÇO DOS ACESSÓRIOS:<u class="underL" > R$
            <?php
                echo $preco_ac;
            ?></u></h3>
            <br>
    <h1 style="tnameext-align: left;">&#171;PREÇO TOTAL&#187;<br><u class="underL" >R$:
    <?php 
                echo ($preco_carro + $preco_ac); 
            ?></u>
            </h1>
            </div>
          
        </form>
    
        </fieldset>
        </center>
        <br><br>>s
        <div class="rodape">
            <p>Autoria do site : Lucas Ferreira.
            <p>Todos os direitos reservado 09/05/2018</p>
         </div>
    </body>
</html>