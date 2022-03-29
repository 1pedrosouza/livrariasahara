<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/livroModel.php");
?>

<div class="container">





<img src="../view/img/onepunchmancapa.jpg" class="img">




<div class="titulo">
    
<h1>One Punch Man</h1>
<h3>ONE & Murata, Yusuke </h3>
<p>Conta o dia-a-dia de um herói normal que está infeliz por ser forte o bastante para derrotar todos os seus oponentes com apenas um soco, já que isso não lhe traz mais a sensação de adrenalina ao enfrentar um inimigo poderoso...</p>


<div class="bloco7" ><p class="p">Shounen</p></div>
<div class="bloco2" ><p class="p">Aventura</p></div>
<div class="bloco3" ><p class="p">Comédia</p></div>
<div class="bloco4" ><p class="p">Ação</p></div>
<div class="bloco5" ><p class="p">Fantasia</p></div>
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
    $nomelivro = "One Punch Man";

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