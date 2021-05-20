<?php 
require_once("../classes/autoload.php")
$pessoas_all = $pessoas->all();

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
                            <th>email</th>
                            <th>telefone</th>
                            <th>rg</th>
                            <th>cpf</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>


                          <?php 
                            foreach($pessoas_all as $pessoa){
                           ?>


                          <tr>
                            <td><?php echo $pessoa->nome ?></td>
                            <td><?php echo $pessoa->email ?></td>
                            <td><?php echo $pessoa->telefone ?></td>
                            <td><?php echo $pessoa->rg ?></td>
                            <td><?php echo $pessoa->cpf ?></td>
                            <td>
                              <a href="index.php?modulo=pessoas&acao=editar&id=<?php echo $pessoa->id?>"><button class='btn btn-primary'></button></a>
                              <a href="index.php?modulo=pessoas&acao=deletar&id=<?php echo $pessoa->id?>"><button class='btn btn-danger'></button></a>
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
