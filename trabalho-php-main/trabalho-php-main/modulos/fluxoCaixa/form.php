<div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Valor</label>
                      <input name="valor" type='text' class="form-control" value="<?php echo $fluxoCaixa->valor ?>" id="" placeholder="Valor">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Origem</label>
                      <input name="origem" type='text' class="form-control" value="<?php echo $fluxoCaixa->origem ?>" id="" placeholder="Origem">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Funcionario</label>
                        <input name="funcionario" type='text' class="form-control" value="<?php echo $fluxoCaixa->funcionario ?>" id="" placeholder="Funcionario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Data</label>
                        <input name="data" type='text' class="form-control" value="<?php echo $fluxoCaixa->data ?>" id="" placeholder="Data">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tipo</label>
                        <input name="tipo" type='text' class="form-control" value="<?php echo $fluxoCaixa->tipo ?>" required id="" placeholder="Tipo">
                      </div>
                  </div>