<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");

extract($_REQUEST, EXTR_OVERWRITE);

$informa = visuUsuarioCodigo($conn, $codigousu);


?>

<div class="container">

<form class="row g-3" action="../controler/alterarUsuario.php" method="post">
    <input type="hidden" name="codigousu" value="<?=$informa["idusu"]?>">
  <div class="col-md-6">
    <label for="inputNome4" class="form-label">Nome</label>
    <input type="text" name="nomeusu" value="<?=$informa["nomeusu"] ?>" class="form-control" id="inputNome4" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="emailusu" value="<?=$informa["emailusu"] ?>" class="form-control" id="inputEmail4" required>
  </div>
  <div class="col-6">
    <label for="inputFone" class="form-label">Fone</label>
    <input type="text" name="foneusu" value="<?=$informa["foneusu"] ?>" class="form-control" id="telefone" placeholder="55 (--) 91234-5678" required>
  </div>
  <div class="col-6">
    <label for="inputCPF" class="form-label">CPF</label>
    <input type="text" name="cpfusu" value="<?=$informa["cpfusu"] ?>" class="form-control" id="cpf" placeholder="123.456.789-00" required>
  </div>
  </div>
 
  <div class="col-12">
    <button type="submit" id="botaoalterar" class="btn btn-primary">Alterar</button>
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
