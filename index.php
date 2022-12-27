<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbosa - Validar extensao de arquivo com PHP</title>
</head>
<body>
    <?php
        $dados=filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        //Acessar o IF quando o usuário clicar no botão Enviar
        if(!empty($dados['EnviarArquivo']) ){

            //Recebeer o arquivo do formulário
            $arquivo = $_FILES['arquivo'];
            
            if($arquivo['type'] == 'application/pdf'){
                echo "<p style='color: green;'>Arquivo válido (PDF).</p>";
            }else{
                echo "<p style='color: #f00;'> Erro: Necessário enviar arquivo PDF!</p>";
            }
        }
    ?>

    <h1>Validar extensão de arquivo com PHP</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <label >Arquivo</label>
        <input type="file" name="arquivo" id="arquivo"><br><br>

        <!-- Com isso Só vai trazer os  arquivos pdf's
        <input type="file" name="arquivo" id="arquivo" accept="application/pdf"><br><br>-->

        <input type="submit" name="EnviarArquivo" value="Enviar"> 
    </form>
</body>
</html>