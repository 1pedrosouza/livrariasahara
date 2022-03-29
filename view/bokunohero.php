<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/livroModel.php");
?>

<div class="container">





<img src="../view/img/bokunoherocapa.jpg" class="img">




<div class="titulo">
    
<h1>Boku no Hero Academia</h1>
<h3>Horikoshi, Kouhei</h3>
<p>A série conta a história de Midoriya Izuku, um garoto tímido e fraco cujo sonho é ser um herói. O problema é que ele vive num mundo repleto de pessoas com super poderes, mas ele mesmo não tem poder algum. No entanto, ele não desiste de seu grande sonho e fará de todo o possível para ser o maior herói que o mundo já conheceu!</p>


<div class="bloco13" ><p class="p">Super Poderes</p></div>
<div class="bloco2" ><p class="p">Histórico</p></div>
<div class="bloco4" ><p class="p">Ação</p></div>

<div class="bloco3" ><p class="p">Escolar</p></div>

<div class="bloco12" ><p class="p">Shounen</p></div>

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
    $nomelivro = "My Hero Academia";

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