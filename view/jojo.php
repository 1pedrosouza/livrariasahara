<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/livroModel.php");
?>

<div class="container">





<img src="../view/img/jojopart4capa.jpg" class="img">




<div class="titulo">
    
<h1>JoJo no Kimyou na Bouken Part 4: Diamond wa Kudakenai</h1>
<h3>Araki, Hirohiko </h3>
<p>A quarta parte do JJBA incide sobre Josuke Higashikata, o filho ilegítimo de Joseph Joestar, com Jotaro Kujo e Joseph Joestar juntos em um papel de apoio. Aparentemente sentindo que precisava de mais explicação, Araki retroativamente introduz o "Arco e Flecha", um artefato antigo que faz com que a capacidade de suporte latente se desenvolva nas pessoas. Aparentemente Enya usou este artefato em Dio, que também causou o desenvolvimento de Stands na linhagem Joestar.</p>

<div class="bloco10" ><p class="p">Artes Marciais</p></div>
<div class="bloco2" ><p class="p">Shounen</p></div>
<div class="bloco4" ><p class="p">Ação</p></div>
</div> 


</div>

<div class="mangasaparecem">




  <table class="table">
    <thead>
      <tr>
      <th scope="col">Capa</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
        <th scope="col">genero</th>
      </tr>
    </thead>
    <tbody>
      <?php
    $nomelivro = "Jojo";

      if($nomelivro){

        $dado=visuNomeLivro($conn, $nomelivro);
   
        foreach($dado as $Livro):
      ?>
          <tr>
          <td><img class="imagimanga" width="200" height="300" src="<?= $Livro["imglivro"] ?>"></td>
            <td><?=$Livro["nomelivro"]?></td>
            <td><?=$Livro["valorlivro"]?></td>
            <td><?=$Livro["generolivro"]?></td>
           
          </tr>
      <?php
        endforeach;
      }
      ?>
    </tbody>




<?php
include_once("../view/footer.php");
?>