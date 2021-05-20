<?php 
require_once("../classes/autoload.php")
$estoques_all = $estoques->all();

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
                            <th>material</th>
                            <th>valor</th>
                            <th>fornecedor</th>
                            <th>entrada</th>
                            <th>saida</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>


                          <?php 
                            foreach($estoques_all as $estoque){
                           ?>


                          <tr>
                            <td><?php echo $estoque->material ?></td>
                            <td><?php echo $estoque->valor ?></td>
                            <td><?php echo $estoque->fornecedor ?></td>
                            <td><?php echo $estoque->entrada ?></td>
                            <td><?php echo $estoque->saida ?></td>
                            <td>
                              <a href="index.php?modulo=estoque&acao=editar&id=<?php echo $estoque->id?>"><button class='btn btn-primary'>Editar</button></a>
                              <a href="index.php?modulo=estoque&acao=deletar&id=<?php echo $estoque->id?>"><button class='btn btn-danger'>Deletar</button></a>
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
