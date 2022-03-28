<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/LivroModel.php");


extract($_REQUEST,EXTR_OVERWRITE);


if(inserirLivro($conn,$nomelivro,$generolivro,$valorlivro,$qtdlivro,$imglivro,$distribuidoralivro,$datalancamentolivro) ){
echo("O perfil foi cadastrado com sucesso!");
}else{
echo("O perfil está incompleto, tente novamente.");

}

include_once("../view/footer.php");
?>