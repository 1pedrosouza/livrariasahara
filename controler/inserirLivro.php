
<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/livroModel.php");


extract($_REQUEST,EXTR_OVERWRITE);

if ( isset( $_FILES[ 'imglivro' ][ 'name' ] ) && $_FILES[ 'imglivro' ][ 'error' ] == 0 ) {
 
    $arquivo_tmp = $_FILES[ 'imglivro' ][ 'tmp_name' ];
    $nome = $_FILES[ 'imglivro' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png;.jfif', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = '../view/img/'.$novoNome;
 
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
           
        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png;*.jfif"<br />';
}
else
    echo 'Você não enviou nenhum arquivo!';

if(inserirLivro($conn,$nomelivro,$generolivro,$valorlivro,$qtdlivro,$destino,$distribuidoralivro,$datalancamentolivro)){
echo("O Jogo foi cadastro com sucesso !!!");
}else{
echo("O Jogo esta incompleto, tente novamente !!!");

}

include_once("../view/footer.php");
?>