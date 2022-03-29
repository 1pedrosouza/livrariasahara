<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/livroModel.php");

?>

<div class="container">





<img src="../view/img/chainsawman.webp" class="img">




<div class="titulo">
    
<h1>Chainsaw Man</h1>
<h3>Fujimoto, Tatsuki</h3>
<p>Quando seu pai morreu, Denji ficou preso com uma dívida que era incapaz de pagar. Mas graças à ajuda de um cachorro demônio que ele salvou chamado Pochita, Denji é capaz de sobreviver como caçador de demônios de aluguel. Os poderes de serra elétrica do Pochita são bem poderosos contra estes demônios. E então, quando o Denji acaba sendo morto por um demônio, o Pochita desiste de sua vida para revivê-lo. Mas, agora o Denji renasceu como um hibrido de demônio com humano... Agora ele é o "Chainsaw Man"!!!</p>


<div class="bloco1" ><p class="p">Shounen</p></div>
<div class="bloco2" ><p class="p">Aventura</p></div>
<div class="bloco3" ><p class="p">Demônios</p></div>
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
$nomelivro = "Chainsaw man";

      if($nomelivro){

        $dado=visuNomeLivro($conn, $nomelivro);
   
        foreach($dado as $Livro):
      ?>
          <tr>
          <td><img width="200" height="300" src="<?= $Livro["imglivro"] ?>"></td>
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