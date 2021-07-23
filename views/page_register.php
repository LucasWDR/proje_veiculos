<?php include_once '../public/dependencias.php' ?>

<br><br><br>
<h2 class="text-center">
    Cadastro de Veiculos <i class="fa fa-List"></i>
</h2>
<br> <br> <br>
<form method="post" action="../controller/insert_costumer.php">
    <div class="container">
    <div class="form-row">
         <div class="col-md-6">
           Numero do Chassi: <i class="fa fa-user"></i> 
           <input class="form-control" id="numchassi" name="numchassi" type="text" required placeholder="Digite o numero do chassi do veiculo" autofocus>
         </div>

         <div class="col-md-6">
           Marca: <i class="fa fa"></i> 
           <input class="form-control" id="marca" name="marca" type="text" required placeholder="Digite a marca do veiculo" >
         </div>

         <div class="col-md-4">
           Modelo: <i class="fa fa"></i> 
           <input class="form-control" id="modelo" name="modelo" type="text" required placeholder="Digite o modelo do veiculo">
         </div>

         <div class="col-md-4">
           Ano: <i class="fa fa"></i> 
           <input class="form-control" id="ano" name="ano" type="date" required placeholder="Digite o ano do veiculo" autofocus>
         </div>

         <div class="col-md-4">
           Placa: <i class="fa fa"></i> 
           <input class="form-control" id="placa" name="placa" type="text" required placeholder="Digite a placa do veiculo" autofocus>
         </div>

         <div class="col-md-4">
           Tipo: <i class="fa fa"></i> 
           <input class="form-control" id="tipo" name="tipo" type="text" required placeholder="Digite o tipo:esporte, classico etc" autofocus>
         </div>

         <div class="col-md-4">
           Para: <i class="fa fa"></i> 
           <input class="form-control" id="para" name="para" type="text" required placeholder="Digite para que será usado:trabalho, longas etc" autofocus>
         </div>

           
           <div class="col-md-6 text-left">
             <br>
                <a class="btn btn-success btn-lg" href="../index.php">
                    Voltar <i class="fa fa-arrow-circle-left"></i>
                </a>
            </div>

            <div class="col-md-6 text-right" class="botao_inserir" >
                <button class="btn btn-primary btn-lg">
                    Inserir Veiculo <i class="fa fa-user-plus"></i>
                </button>
            </div>
      </div>
    </div>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>




