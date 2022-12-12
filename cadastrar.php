<?php
    include('config.php');
    Mysql::conectar();
?>

<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela De Cadastro</title>
    <style>
        body{
            font-family: arial, helvetica, sans-serif;
            background: rgb(112, 14, 14);
        }
        div{
            background-color: rgba(0,0,0, 0.9);
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius:15px;
            color: white
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor:pointer ;
        }

        button:hover{
            background-color: deepskyblue;

        }


    </style>



</head>
<body>
    <?php
        if(isset($_POST[acao]) && $_POST['cadastro'] == 'cadastro'){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if($nome==''){
                cadastro::alert('erro', 'o nome ficou vazio!');
            }else if($email == ''){
                cadastro::alerta('erro', 'o email ficou vazio');
            }else if($senha == ''){
                cadastro::alerta('erro', 'a senha ficou vazia');
            }else{
                cadastro::cadastrar($nome,$email,$senha);
                cadastro::alerta('erro','usuario'.$nome. 'cadastrado com sucesso!');

            }


        }



?>
    <div>
        <h1> Cadastro </h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="passoword" placeholder="Senha">
        <br><br>
        <input type="Email" placeholder="Email">
        <br><br>
        <a href="index.html"><button>Cadastra</button></a>



    </div>
</body>
</html>