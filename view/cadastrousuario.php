<?php
include_once("header.php");
?>

<div class="container">

<form class="row g-3" action="../controler/inserirCadastro.php" method="Get">
  <div class="col-md-12">
    <label for="inputNome4" class="form-label">Nome</label>
    <input type="text" name="nomeusu" class="form-control" id="inputNome4" required>
  </div>

  <div class="col-4">
    <label for="inputFone" class="form-label">Fone</label>
    <input type="text" name="foneusu" class="form-control" id="telefone" placeholder="(11)969480059" required>
  </div>
  <div class="col-6">
    <label for="inputCPF" class="form-label">CPF</label>
    <input type="text" name="cpfusu" class="form-control" id="cpf" placeholder="777.777.777-77" required>
  </div>
  <div class="col-md-2">
    <label for="inputTipo" class="form-label">Tipo de usuário</label>
    <select id="inputTipo" name="tipousu" class="form-select">
      <option selected >Escolha...</option>
      <option value="1">Funcionário</option>
      <option value="2"> Cliente</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="emailusu" class="form-control" id="inputEmail4" required>
  </div>
  <div class="col-md-3">
    <label for="inputComple" class="form-label">Senha</label>
    <input type="password" name="senhausu" class="form-control" id="inputSenha">
  </div>
  <div class="col-md-3">
    <label for="inputComple" class="form-label">Pin</label>
    <input type="password" name="pinusu" class="form-control" id="inputPin">
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

    <!--JavaScript - JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('#cpf').mask('000.000.000-00');
          $('#telefone').mask('(00)00000-0000');
        });

    </script>
<?php
include_once("footer.php");
?>
