<?php 
require_once("../classes/autoload.php")
$fornecedores_all = $fornecedores->all();

 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <!-- left column -->
                    <!-- /.card-header -->
                    <div class="card-body table-responsive " >
                      <table class="table table-head-fixed text-nowrap">
                        <thead>
                          <tr>
                            <th>nome</th>
                            <th>nome_fantasia</th>
                            <th>responsavel</th>
                            <th>produtos</th>
                            <th>cnpj</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>


                          <?php 
                            foreach($fornecedores_all as $fornecedor){
                           ?>


                          <tr>
                            <td><?php echo $fornecedor->nome ?></td>
                            <td><?php echo $fornecedor->nome_fantasia ?></td>
                            <td><?php echo $fornecedor->responsavel ?></td>
                            <td><?php echo $fornecedor->produtos ?></td>
                            <td><?php echo $fornecedor->cnpj ?></td>
                            <td>
                              <a href="index.php?modulo=fornecedores&acao=editar&id=<?php echo $fornecedor->id?>"><button class='btn btn-primary'></button></a>
                              <a href="index.php?modulo=fornecedores&acao=deletar&id=<?php echo $fornecedor->id?>"><button class='btn btn-danger'></button></a>
                            </td>
                          </tr>

                          <?php 
                        }
                           ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  
</div>
<!-- ./wrapper -->
