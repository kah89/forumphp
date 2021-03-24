
<!DOCTYPE html>
<style>
    body{
        text-align: center;
        position: absolute;
        width:100%;
        font-family:'Courier New', Courier, monospace ;
    }
    #button{
        background: #7CCD7C;
        border-radius: 10px; 
        padding: 15px; 
        cursor: pointer; 
        color: #fff; 
        border: 1px solid #3f96cf; 
        font-size: 19px;
        text-align: center;
        width: 250px;
       
    }

    .cadastro{
        background: #6CA6CD; 
        border-radius: 10px; 
        padding: 15px; 
        cursor: pointer; 
        color: #fff; 
        border: 1px solid #3f96cf; 
        font-size: 19px;
        width: 492px;
        text-align: center;
    }
    ::-webkit-input-placeholder {
    color: #f6faf6;
}
    
</style>
<html>
    <body>

    <?php

        if(!empty($_POST)){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $arquivo = fopen("arquivo.txt","a") or die ( "Não foi possivel abrir o arquivo");
            $txt = "\n" . $nome . "/" . $email ;

            fwrite($arquivo,$txt);
            fclose($arquivo);

            header("Location: https://www.youtube.com/watch?v=H43fXodv6WY"); 

            exit;
        }

?>

        <form action="index.php"  method="post">
            <img src="img1.PNG"><br><br>
            <input type="text" name="nome"   value="" placeholder="DIGITE SEU NOME COMPLETO" class="cadastro" id="nome" required><br>
            <input type="email" name="email"  value="" placeholder="DIGITE SEU E-MAIL" class="cadastro" id="email" required><br><br>
            <input type="submit" value="ENTRAR" id="button"  onClick="">
        </form>

    </body>

</html>
