<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/livroModel.php");
?>

<div class="container">





<img src="../view/img/bleachcapa2.jpg" class="img">




<div class="titulo">
    
<h1>Bleach</h1>
<h3>Kubo, Tite</h3>
<p>A história conta com Kurosaki Ichigo como personagem principal. Após uma série de incidentes ele acaba se tornando um Shinigami, que são responsáveis pelo fluxo de almas do mundo real até a Soul Society, assim como combater os espíritos malígnos, Hollows. Porém, conforme ele começa a se envolver com o mundo espiritual, ele acaba no meio de uma trama que ameaça a existência de ambos os mundos.</p>


<div class="bloco9" ><p class="p">Shounen</p></div>
<div class="bloco2" ><p class="p">Aventura</p></div>
<div class="bloco8" ><p class="p">Sobrenatural</p></div>
<div class="bloco4" ><p class="p">Ação</p></div>
<div class="bloco6" ><p class="p">Super Poderes</p></div>
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
    $nomelivro = "Bleach";

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