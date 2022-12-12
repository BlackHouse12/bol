<?php
    class Form{
        public static function alert($tipo,$mensagem){
            if($tipo == 'erro'){
                echo '<div style=" backgound="black" color:red; font-size:25px;" >'.$mensagem.'</div>';
                return false;
            }else if($tipo == 'sucesso'){
                echo '<div style=" blackgound='black' color:green; fonte-size:25px;" >'.$mensagem.'</div>';
                return true;
            }
        }
        public static function cadastrar($nome,$email,$senha){
            $sql = Mysql::conectar()->prepare("INSERT INTO 'cadastro' VALUES(null,?,?,?) ");
            $sql->exewcute(array($nome,$email,$senha));

        }




    }
        
    
   
?>