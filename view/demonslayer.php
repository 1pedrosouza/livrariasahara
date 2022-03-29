<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/livroModel.php");
?>

<div class="container">





<img src="../view/img/demonslayercapa.jpg" class="img">




<div class="titulo">
    
<h1>Kimetsu no Yaiba</h1>
<h3>Gotouge, Koyoharu</h3>
<p>O mangá conta a história de Tanjiro, o filho mais velho de uma família que é massacrada por um demônio e, a única sobrevivente do incidente foi umas das suas irmãs, que por causa do massacre acaba se transformando em um demônio. Então, o protagonista, Tanjiro, sai em uma jornada para tentar achar uma ''cura'' para a sua irmã...</p>


<div class="bloco11" ><p class="p">Shounen</p></div>
<div class="bloco2" ><p class="p">Histórico</p></div>
<div class="bloco8" ><p class="p">Sobrenatural</p></div>
<div class="bloco4" ><p class="p">Ação</p></div>
<div class="bloco3" ><p class="p">Demônios</p></div>
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
    $nomelivro = "Demon Slayer";

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