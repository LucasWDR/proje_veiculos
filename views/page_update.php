<?php include_once '../public/dependencias.php';

include_once '../model/Conexao.php';
include_once '../model/Manager.php';

$m = new Manager();

$id = $_POST['id'];
?>


<h2 class="text-center">
  Alterar Veiculo <i class="fa fa-List"></i>
</h2>

<form method="post" action="../controller/update_costumer.php">
  <div class="container">
    <div class="form-row">

      <?php foreach ($m->getInfo('veiculos', $id) as $c) : ?>
        <div class="col-md-6">
          Numero do Chassi: <i class="fa fa-user"></i>
          <input class="form-control" id="numchassi" name="numchassi" type="text" required placeholder="Digite o numero do chassi do veiculo" autofocus value="<?= $c['numchassi'] ?>">
        </div>

        <div class="col-md-6">
          Marca: <i class="fa fa"></i>
          <input class="form-control" id="marca" name="marca" type="text" required placeholder="Digite a marca do veiculo" value="<?= $c['marca'] ?>">
        </div>

        <div class="col-md-4">
          Modelo: <i class="fa fa"></i>
          <input class="form-control" id="modelo" name="modelo" type="text" required placeholder="Digite o modelo do veiculo" value="<?= $c['modelo'] ?>">
        </div>

        <div class="col-md-4">
          Ano: <i class="fa fa"></i>
          <input class="form-control" id="ano" name="ano" type="data" required placeholder="Digite o ano do veiculo" autofocus value="<?= $c['ano'] ?>">
        </div>

        <div class="col-md-4">
          Placa: <i class="fa fa"></i>
          <input class="form-control" id="placa" name="placa" type="text" required placeholder="Digite a placa do veiculo" autofocus value="<?= $c['placa'] ?>">
        </div>

        <div class="col-md-4">
          Tipo: <i class="fa fa"></i>
          <input class="form-control" id="tipo" name="tipo" type="text" required placeholder="Digite o tipo:esporte, classico etc" autofocus value="<?= $c['tipo'] ?>">
        </div>

        <div class="col-md-4">
          Para: <i class="fa fa"></i>
          <input class="form-control" id="para" name="para" type="text" required placeholder="Digite para que será usado:trabalho, longas etc" autofocus value="<?= $c['para'] ?>">
        </div>

        <input type="hidden" name="id" value="<?= $c['id'] ?>">
      <?php endforeach; ?>

       <br>       <br>      <br>

       <div class="col-md-6 text-left">
        <a class="btn btn-sucess btn-lg text-left" href="../index.php">
          Voltar <i class="fa fa-arrow-circle-left"></i>
        </a>
      </div>

      <div class="col-md-6 text-right ">
        <button class="btn btn-warning btn-lg">
          Alterar Veiculo <i class="fa fa-user-edit"></i>
        </button>
      </div>
     
    </div>
  </div>
  </div>
</form>