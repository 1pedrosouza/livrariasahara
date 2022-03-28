<?php
include_once("../view/header.php");
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



  
<?php
$imglivro = isset ($_GET["imglivro"])? $_GET["imglivro"]:"" ;
  $ImagemLivro = visuImagem($conn, $imglivro);

?>  
<td>

<td><?=$ImagemLivro["imglivro"] ?></td>

  </td>

 

    </div>
<?php
include_once("../view/footer.php");
?>