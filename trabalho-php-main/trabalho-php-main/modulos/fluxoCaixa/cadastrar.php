

<?php

$fluxoCaixa = new Fluxo_de_caixa();

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action='../index.php?modulo=fluxoCaixa&acao=store' method='POST'>
                                    <?php include_once('form.php') ?>

                  <!-- /.card-body -->
                    <button  type='submit' class="btn btn-primary" name='cadastro'>Cadastrar</button>                 
                </form>
              </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->