<?php 
session_start();

function inserirLivro($conn,$nomelivro,$generolivro,$valorlivro,$qtdlivro,$imglivro,$distribuidoralivro,$datalancamentolivro) {

$query = "INSERT INTO `tblivro` (`idlivro`, `nomelivro`, `generolivro`, `valorlivro`, `qtdlivro`, `imglivro`,`distribuidoralivro`,`datalancamentolivro`) VALUES (NULL,'{$nomelivro}','{$generolivro}','{$valorlivro}','{$qtdlivro}','{$imglivro}','{$distribuidoralivro}','{$datalancamentolivro}')";
$dados = mysqli_query($conn,$query);
return $dados; 

};

function visuLivroNome($conn,$nomelivro){
    $query = "select * from tblivro where nomelivro like '%{$nomelivro}%'";
    $resultado = mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
     
};

function visuLivroCodigo($conn, $codigolivro){
    $query = "select * from tblivro where idlivro = '{$codigolivro}'";
    $resultado = mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
};



function visuLivroGenero($conn, $generolivro){
    $query = "select * from tblivro where generolivro = '{$generolivro}'";
    $resultado = mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
};


function visuNomeLivro($conn, $nomelivro){
    $query = "select * from tblivro where nomelivro like '%{$nomelivro}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
};



function alterarLivro($conn,$codigolivro,$nomelivro,$generolivro,$qtdlivro,$imglivro,$datalancamentolivro,$distribuidoralivro){
    var_dump(visuLivroNome($conn,$nomelivro));
    $query = "update tblivro set 
    nomelivro='{$nomelivro}', 
    generolivro='{$generolivro}', 
    qtdlivro='{$qtdlivro}',
    imglivro='{$imglivro}'
    datalancamentolivro='{$datalancamentolivro}',
    distribuidoralivro='{$distribuidoralivro}' where idlivro = '{$codigolivro}'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;

}

?>