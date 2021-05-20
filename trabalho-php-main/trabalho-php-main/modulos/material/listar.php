<?php 
require_once("../classes/autoload.php")
$material_all = $material->all();

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
                            <th>quantidade</th>
                            <th>tipo</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>


                          <?php 
                            foreach($material_all as $material){
                           ?>


                          <tr>
                            <td><?php echo $material->nome ?></td>
                            <td><?php echo $material->quantidade ?></td>
                            <td><?php echo $material->tipo ?></td>
                            <td>
                              <a href="index.php?modulo=material&acao=editar&id=<?php echo $material->id?>"><button class='btn btn-primary'></button></a>
                              <a href="index.php?modulo=material&acao=deletar&id=<?php echo $material->id?>"><button class='btn btn-danger'></button></a>
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
