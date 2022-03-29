<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/livroModel.php");
?>

<div class="container">





<img src="../view/img/bakicapa2.jpg" class="img">




<div class="titulo">
    
<h1>Baki: New Grappler Baki</h1>
<h3>Itagaki, Keisuke</h3>
<p>Baki Hanma é um estudante geralmente feliz com um hobby bastante estranho; ele gosta de lutar. Especificamente, ele gosta de lutar em um torneio secreto de artes marciais que reúne os maiores lutadores do mundo e coloca-os uns contra os outros em combates realmente desagradáveis. Seja você um lutador de sumô, um especialista em karatê ou um cara que se especializou em arrancar os nervos do seu oponente, você pode participar (contanto que possa manter segredo sobre isso, é claro). De qualquer forma, Baki pode ser o lutador mais jovem que o torneio já viu, mas ele também é o melhor, e ele realmente gosta do que faz.</p>

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
    $nomelivro = "Baki";

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