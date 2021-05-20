<?php 
require_once("../classes/autoload.php")
$fluxoCaixa_all = $fluxoCaixa->all();

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
                            <th>origem</th>
                            <th>valor</th>
                            <th>funcionario</th>
                            <th>data</th>
                            <th>tipo</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>


                          <?php 
                            foreach($fluxoCaixa_all as $caixa){
                           ?>


                          <tr>
                            <td><?php echo $caixa->origem ?></td>
                            <td><?php echo $caixa->valor ?></td>
                            <td><?php echo $caixa->funcionario ?></td>
                            <td><?php echo $caixa->data ?></td>
                            <td><?php echo $caixa->tipo ?></td>
                            <td>
                              <a href="index.php?modulo=fluxoCaixa&acao=editar&id=<?php echo $fluxoCaixa->id?>"><button class='btn btn-primary'>Editar</button></a>
                              <a href="index.php?modulo=fluxoCaixa&acao=deletar&id=<?php echo $fluxoCaixa->id?>"><button class='btn btn-danger'>Deletar</button></a>
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
