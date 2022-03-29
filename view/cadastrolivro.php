<?php
include_once("header.php");
?>

<div class="container">

<form class="row g-3" action="../controler/inserirLivro.php" method="Post" enctype="multipart/form-data">
  <div class="col-md-12">
    <label for="inputlivro4" class="form-label">Nome do Livro</label>
    <input type="text" name="nomelivro" class="form-control" id="inputlivro4" required>
  </div>

  <div class="col-md-2">
    <label for="inputTipo" class="form-label">Genero Livro</label>
    <select id="inputTipo" name="generolivro" class="form-select">
      <option selected >Escolha...</option>
      <option value="Shounen">Shounen</option>
      <option value="Luta">Luta</option>
      <option value="Acao">Ação</option>
      <option value="SuperPoderes">Super Poderes</option>
      <option value="Aventura">Aventura</option>
      <option value="Demonios">Demónios</option>
    </select>
  </div>

  <div class="col-6">
    <label for="inputvalor" class="form-label">Valor</label>
    <input type="Number" name="valorlivro" class="form-control" id="valorlivro" placeholder="1" required>
  </div>

 

  
  <div class="col-md-6">
    <label for="inputqtd4" class="form-label">Quantidade</label>
    <input type="number" name="qtdlivro" class="form-control" id="inputqtd4" required>
  </div>
  <div class="col-4">
    <label for="inputcapa" class="form-label">Imagem Capa</label>
    <input type="file" name="imglivro" class="form-control" id="capa" placeholder="../view/img/imagem.png" required>
  </div>
  <div class="col-md-3">
    <label for="inputdistribuidora" class="form-label">Distribuidora</label>
    <input type="text" name="distribuidoralivro" class="form-control" id="inputdistribuidora" required>
  </div>
  <div class="col-md-3">
    <label for="inputdatalan" class="form-label">Data Lançamento</label>
    <input type="date" name="datalancamentolivro" class="form-control" id="inputdatalanlivro" required>
  </div>

  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Confirmo que aceito os termos de uso.
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Criar</button>
  </div>
</form>

</div>


<?php
include_once("footer.php");
?>
